<div class="flex justify-center items-center w-full">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">


        <x-jet-validation-errors></x-jet-validation-errors>

        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">
            Formulario para artículos
        </h1>


        <form wire:submit.prevent="save" method="post">
            <input type="hidden" value="{{ csrf_token() }}">
            <div class="flex mb-4 col-span-2 flex items-center justify-center">
                <div class="h-32 bg-gray-50 border-2 border-dashed rounded flex items-center justify-center relative">

                    @if($image)
                        <x-jet-danger-button wire:click="$set('image')" class="absolute bottom-2 right-2">Cambiar imagen</x-jet-danger-button>
                        <img class="h-auto w-auto max-h-28 max-w-28 object-cover object-center rounded-full"
                             src="{{ $image->temporaryUrl() }}" alt="">
                    @elseif($article->image)
                        <label class="cursor-pointer absolute bottom-2 right-2 cursor-pointer p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300" for="image-file">Cambiar imagen</label>
                        <img src="{{ $article->image }}" alt="">
                    @else
                        <label
                            class="cursor-pointer p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300"
                            for="image-file">
                            Seleccionar imagen
                        </label>
                    @endif

                </div>
                <input wire:model="image" class="hidden border py-2 px-3 text-grey-800" type="file" name="image-file"
                       id="image-file" accept="image/*">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="title">Titulo</label>
                <input wire:model="article.title" class="border py-2 px-3 text-grey-800" type="text" name="title"
                       id="title">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="slug">Url amigable</label>
                <input wire:model="article.slug" class="border py-2 px-3 text-grey-800" type="text" name="slug"
                       id="slug">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="content">Contenido</label>
                <x-html-editor wire:model="article.content" class="border py-2 px-3 text-grey-800" name="content"
                               id="content"></x-html-editor>
            </div>
            {{--<div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="password">Password</label>
                <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="Date">Date</label>
                <input class="border py-2 px-3 text-grey-800" type="date" name="date" id="date">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
                <input class="border py-2 px-3 text-grey-800" type="file" name="file" id="file">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="color">Range</label>
                <input class="border py-2 text-grey-800" type="range" name="range" id="range">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="textarea">textarea</label>
                <textarea class="border py-2 px-3 text-grey-800" name="textarea" id="textarea"></textarea>
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Select</label>
                <select class="border py-2 px-3 text-grey-800">
                    <option>Surabaya</option>
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Mojokerto</option>
                </select>
            </div>--}}
            <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded"
                    type="submit">Guardar
            </button>
        </form>
    </div>
</div>
