<div>
    <x-mary-card class="fixed bottom-0 right-0 p-2 ">
        <x-mary-form wire:submit="save" no-separator>
            <x-mary-textarea
            label="Bio"
            wire:model="bio"
            placeholder="Your story ..."
            hint="Max 1000 chars"
            rows="3"
            inline />

            <x-slot:actions>
                <x-mary-button label="Click me!" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-mary-form>
    </x-mary-card>
</div>
