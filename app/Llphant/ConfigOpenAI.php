<?php

namespace App\Llphant;

use LLPhant\Chat\OpenAIChat;
use LLPhant\Embeddings\DataReader\FileDataReader;
use LLPhant\Embeddings\DocumentSplitter\DocumentSplitter;
use LLPhant\Embeddings\EmbeddingGenerator\OpenAI\OpenAIADA002EmbeddingGenerator;
use LLPhant\OpenAIConfig;

class ConfigOpenAI
{

    public $config;
    public function __construct($key)
    {
        $this->config = new OpenAIConfig;
        $this->config->apiKey = $key;
        $this->config->model="gpt-4o-mini";

    }
    public function uploadFile($file){
       // dd($file);
        $dataReader = new FileDataReader(__DIR__.$file);
        $documents = $dataReader->getDocuments();

        $splitDocuments = DocumentSplitter::splitDocuments($documents, 500);
          dd($splitDocuments);
        $embeddingGenerator = new OpenAIADA002EmbeddingGenerator($this->config);
        $embeddedDocuments = $embeddingGenerator->embedDocuments($splitDocuments);
        dd($embeddedDocuments);
    }
    public function chat(){
        $chat = new OpenAIChat($this->config);
        return $chat;
    }
}
