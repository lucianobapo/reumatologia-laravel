
<div class="row" style="margin-bottom: 30px">

    @foreach(scandir(public_path('/img/revistas')) as $file)
        @if(strpos($file, 'Revista')!==false && strpos($file, '.jpg')!==false && strpos($file, 'x')===false)
            <div class="col-md-2" style="margin: 5px;">
                <a target="_blank" href="/img/revistas/{{ str_replace('.jpg','.pdf', $file) }}">
                    <img src="/img/revistas/{{ $file }}">
                </a>
            </div>
        @endif
    @endforeach

</div>
