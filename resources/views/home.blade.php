<style>
    .container {
        font-family: 'Noto Sans', sans-serif;        
    }
    h3 {
        margin-bottom: 30px;
    }
    th {
        height: 20px;
        text-align: center;
    }
    td {
        height: 10px;
    }
    .today {
        background: orange;
    }
    th:nth-of-type(1), td:nth-of-type(1) {
        color: red;
    }
    th:nth-of-type(7), td:nth-of-type(7) {
        color: blue;
    }
</style>
@extends('master')

<!-- judul halaman -->
<!-- @section('judul halaman', 'Halaman Home') -->

<!-- Isi Konten -->
@section('konten')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="pt-5">
                <h4> Selamat Datang di Web Kalender XII RPL B </h4>
            </div>
            <div class="distance">
                <span>AGMAR | XII RPL B </span>
            </div>
            <div class="text-center">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="240" width="240" x="px" y="px"
                viewBox="0 0 280.028 280.028" style="enable-background:new 0 0 280.028 280.028;" xml:space="preserve">
                <g>
                    <path style="fill:#E4E7E7;" d="M17.502,0h245.024c9.661,0,17.502,7.832,17.502,17.502v245.024c0,9.661-7.841,17.502-17.502,17.502
                    H17.502C7.841,280.027,0,272.187,0,262.526V17.502C0,7.832,7.841,0,17.502,0z"/>
                    <path style="fill:#E2574C;" d="M262.526,0H17.502C7.841,0,0,7.832,0,17.502v43.754h280.027V17.502
                    C280.027,7.832,272.187,0,262.526,0z"/>
                    <path style="fill:#324D5B;" d="M189.701,148.292c-3.08,0-6.283,0.534-8.795,1.575l-0.28-0.263
                    c4.603-6.143,13.678-14.518,19.261-20.923c1.671-1.969,2.932-3.535,2.932-5.364c0-4.708-6.012-9.547-9.906-9.547
                    c-1.129,0-2.66,0-4.192,0.919c-1.671,1.05-3.352,2.091-4.472,3.133c-14.098,12.295-35.458,40.035-35.458,59.777
                    c0,17.397,13.538,32.439,35.038,32.439c20.652,0,35.03-15.428,35.03-32.439C218.868,162.153,206.45,148.292,189.701,148.292z
                    M183.838,191.189c-8.375,0-13.266-6.274-13.266-13.608c0-7.71,5.303-13.59,13.266-13.59c8.795,0,13.266,6.668,13.266,13.59
                    C197.095,185.177,191.784,191.189,183.838,191.189z M120,192.423H93.547c12.286-14.229,34.697-32.597,34.697-51.07
                    c0-16.898-14.308-27.67-32.089-27.67s-33.971,13.433-33.971,30.19c0,5.18,3.605,9.705,10.545,9.705
                    c13.879,0,5.933-21.545,22.56-21.545c5.924,0,10.405,4.787,10.405,10.238c0,4.787-2.459,8.908-5.058,12.374
                    c-10.991,14.631-24.004,26.594-36.001,39.764c-1.444,1.601-3.325,3.99-3.325,6.782c0,6.126,4.918,8.777,11.28,8.777h48.287
                    c5.487,0,10.405-2.652,10.405-8.777C131.28,195.074,126.354,192.423,120,192.423z"/>
                    <path style="fill:#BF392C;" d="M0,52.505h280.027v17.502H0V52.505z"/>
                    <path style="fill:#BF392C;" d="M140.014,17.502c4.839,0,8.751,3.92,8.751,8.751s-3.912,8.751-8.751,8.751s-8.751-3.92-8.751-8.751
                    S135.174,17.502,140.014,17.502z"/>
                    <path style="fill:#C2C5C5;" d="M262.526,262.526H17.502C7.841,262.526,0,254.685,0,245.024v17.502
                    c0,9.661,7.841,17.502,17.502,17.502h245.024c9.661,0,17.502-7.841,17.502-17.502v-17.502
                    C280.027,254.685,272.187,262.526,262.526,262.526z"/>
                </g>
            </svg>
            </div>
    </div>
    <div class="col">
         <h3 class="pt-5">
            <a href="?ym={{ $prev }}">&lt;</a> {{ $html_title }} <a href="?ym={{ $next }}">&gt;</a>
        </h3>
        <table class="table table-bordered">
            <tr>
                <th>S</th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
            </tr>
            @foreach($weeks as $week)

            <?php 
            echo $week;
            ?>

            @endforeach
        </table>
        <center><a class="text-dark" href="/calendar"> Tambah Acara? </a></center>
        <br><br>
    </div>
    </div>
</div>

@endsection
