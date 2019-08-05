<aside class="widget news-letter-widget">
    <h2 class="widget-title text-uppercase text-center">Maqola qidirish</h2>
    <form action="{{ route('posts.search', 'text') }}" method="post">
        @csrf
        <input name="fragment" type="text" placeholder="Matn parchasini kiriting" required="">
        <button type="submit" class="text-uppercase text-center btn btn-subscribe"><i class="fa fa-search"></i> Izlash...</button>
    </form>
</aside>