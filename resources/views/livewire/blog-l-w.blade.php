<section class="article-blog block p-20 xs:p-5 sm:p-5 w-full max-w-[1600px] ml-auto mr-auto box-border">
    <!-- <h1 class="text-2xl">BLOG</h1> -->

    <div class="grid grid-cols-1 sm:grid-cols-2 sm:portrait:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5 lg:gap-14 xl:gap-16">
        @foreach($posts as $post)
            <article class="flex flex-col justify-items-center mb-10 xs:p-5 bg-white">
                <figure class="rounded-lg cursor-pointer overflow-hidden aspect-w-1 aspect-h-1 max-w-full h-72 size-full mb-10">
                    <img src="{{$post->image}}" alt="" class="object-cover w-full h-full">
                </figure>
                <a href="#" class="blog-title block text-2xl mb-5 font-bold text-doveGray-600 hover:text-intellezyGreen transition-all duration-200">{{ $post->title }}</a>
                <div class="flex justify-items-stretch mb-5">
                    <p class="text-base uppercase justify-self-start text-doveGray-50">{{ strtoupper($post->created_at->format('F d, Y')) }} - {{ $post->author }}</p>
                </div>
                <p class="mb-5 text-base leading-6 text-doveGray-200">{{$post->content}}</p>
                <a href="#" class="read-more block font-bold text-black/75  hover:text-black/30 transition-all duration-200">
                    Read more
                    <span class="revert-layer after:content-['\2192'] pl-1 font-normal text-sm transform-none tracking-normal"></span>
                </a>
            </article>
        @endforeach
    </div>

    <div class="pagination flex justify-center">
        <a href="/blog?offset=1687258800296" class="flex justify-center items-center font-normal text-xs text-doveGray-200">
            Older
            <span class="ml-2 text-base opacity-6 text-doveGray-50"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
        </a>
    </div>
</section>
