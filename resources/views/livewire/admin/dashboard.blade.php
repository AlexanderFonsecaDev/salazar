<div>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card-->
            <div
                class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-5 bg-green-600"><i class="em em-bookmark" aria-role="presentation"
                                                                      aria-label="BOOKMARK"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Publicaciones</h5>
                        <h3 class="font-bold text-3xl">
                            {{ count(\App\Models\Article::all()) }}
                        </h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card-->
            <div
                class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-5 bg-green-600">
                            <i class="em em-file_folder md:pr-3"
                               aria-role="presentation"
                               aria-label="FILE FOLDER"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Periodos</h5>
                        <h3 class="font-bold text-3xl">249
                        </h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card-->
            <div
                class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-5 bg-green-600">
                            <i class="em em-memo pr-0 md:pr-3"
                               aria-role="presentation" aria-label="MEMO"></i>
                        </div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Grados</h5>
                        <h3 class="font-bold text-3xl">2</h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
    </div>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($articles as $article)
                <div class="bg-white rounded-lg p-6">
                    <div class="flex items-center space-x-6 mb-4">
                        <img class="h-28 w-28 object-cover object-center rounded-full"
                             src="{{ asset('images/content/book.png') }}"
                             alt="photo">
                        <div>
                            <p class="text-xl text-gray-700 font-normal mb-1">
                                {{ $article->title }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <p class="text-gray-400 leading-loose font-normal text-base">
                            {!! Str::words($article->content,20," ....") !!}
                        </p>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('articles.edit',$article) }}" class="p-2 pl-5 pr-5 bg-yellow-500 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300">
                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>

</div>
