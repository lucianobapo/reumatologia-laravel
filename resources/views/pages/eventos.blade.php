<style>
    ul {list-style-type: none;}
    body {font-family: Verdana, sans-serif;}

    /* Month header */
    .month {
        padding: 70px 25px;
        width: 100%;
        background: #1abc9c;
    }

    /* Month list */
    .month ul {
        margin: 0;
        padding: 0;
    }

    .month ul li {
        color: white;
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    /* Previous button inside month header */
    .month .prev {
        float: left;
        padding-top: 10px;
    }

    /* Next button */
    .month .next {
        float: right;
        padding-top: 10px;
    }

    /* Weekdays (Mon-Sun) */
    .weekdays {
        margin: 0;
        padding: 10px 0;
        background-color:#ddd;
    }

    .weekdays li {
        display: inline-block;
        width: 13.6%;
        color: #666;
        text-align: center;
    }

    /* Days (1-31) */
    .days {
        padding: 10px 0;
        background: #eee;
        margin: 0;
    }

    .days li {
        list-style-type: none;
        display: inline-block;
        width: 13.6%;
        text-align: center;
        margin-bottom: 5px;
        font-size:12px;
        color:#777;
    }

    /* Highlight the "current" day */
    .days li .active {
        padding: 5px;
        background: #1abc9c;
        color: white !important
    }
</style>
<div class="row" style="margin-bottom: 30px">

    <div class="month">
        <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>{{ Carbon\Carbon::now()->formatLocalized('%B') }}<br>
                <span style="font-size:18px">{{ Carbon\Carbon::now()->formatLocalized('%Y') }}</span>
            </li>
        </ul>
    </div>

    <ul class="weekdays">
        <li>Mo</li>
        <li>Tu</li>
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
    </ul>

    <ul class="days">
        @for($i=1;$i<32;$i++)
            <li><span class="{{ (Carbon\Carbon::now()->format('d')==$i)?'active':'' }}">{{ $i }}</span></li>
        @endfor
    </ul>
</div>
