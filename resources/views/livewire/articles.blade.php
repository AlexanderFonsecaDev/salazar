<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

    <div>
        <x-jet-label for="search" value="Buscar : " />
        <x-jet-input wire:model.lazy="search" id="search" class="block mt-1 w-full" type="text" name="search"  />
    </div>

    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('articles.create') }}">
        Crear
    </a>

    @foreach($articles as $article)
        <div class="p-10">
            <!--Card 1-->
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $article->title }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $article->content }}
                    </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="{{ route('articles.edit',$article) }}" class="text-xl font-medium text-indigo-500">Editar</a>
                    <a href="{{ route('articles.show',$article) }}" class="text-xl font-medium text-indigo-500">Ver mas ...</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
