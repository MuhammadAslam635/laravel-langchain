<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use Livewire\WithFileUploads;
use LLPhant\Embeddings\DataReader\FileDataReader;
use LLPhant\Embeddings\DocumentSplitter\DocumentSplitter;
use LLPhant\Embeddings\EmbeddingGenerator\OpenAI\OpenAIADA002EmbeddingGenerator;
use LLPhant\OpenAIConfig;
use Carbon\Carbon;

class OpenAiChatComponent extends Component
{
    use WithFileUploads;
    public $config;
    public $conf;
    public $txtfile;

    public function sendMessage(){
        $this->validate([
            'txtfile'=>'required|mimes:txt,pdf,doc,docx'
        ]);
        $key = env('OPENAI_API_KEY');
        $this->config = new OpenAIConfig;
        $this->config->apiKey = $key;
        $this->config->model="gpt-4o-mini";
        $file='';
        if($this->txtfile){
            $file = Carbon::now()->timestamp.'.'.$this->txtfile->extension();
            $this->txtfile->StoreAs('/upload/documents',$file);
        }
        $filePath = $this->txtfile->getPathname();
        $dataReader = new FileDataReader($filePath);
        $documents = $dataReader->getDocuments();


        $splitDocuments = DocumentSplitter::splitDocuments($documents, 1500);
         // dd($splitDocuments);
        $embeddingGenerator = new OpenAIADA002EmbeddingGenerator();
        $embeddedDocuments = $embeddingGenerator->embedDocuments($splitDocuments);
        dd($embeddedDocuments);
        // $this->conf = $this->config->chat()
        // dd($this->conf);
    }
    public function render()
    {
        return view('livewire.chat.open-ai-chat-component');
    }
}
