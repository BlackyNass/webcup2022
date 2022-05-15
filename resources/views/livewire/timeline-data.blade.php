<div>

    <!-- <article class="timeline">
        <nav class="timeline__nav">
            <ul>
                @foreach($capsule_data as $capsule_single_data)
                <li><span>{{$capsule_single_data->date_data}}</span></li>
                @endforeach
            </ul>
        </nav>
        <section class="timeline__section">
            <div class="wrapper">
                @foreach($capsule_data as $capsule_single_data)
                <h2 class="milestone">{{$capsule_single_data->date_data}}</h2>
                <p>{{$capsule_single_data->descriptif}}</p>
                
                @endforeach
            </div>
        </section>
    </article> -->



    <div class="timeline-container" id="timeline-1">
        <div class="timeline-header">
            <h2 class="timeline-header__title">Ma Timeline</h2>
            <h3 class="timeline-header__subtitle">Bienvenu</h3>
        </div>
        <div class="timeline">
            @foreach($capsule_data as $capsule_single_data)
            <div class="timeline-item" data-text="{{$capsule_single_data->date_data}}">
                <div class="timeline__content"><img class="timeline__img" src="{{asset('img/img.jpg')}}" />
                    <h2 class="timeline__content-title">{{$capsule_single_data->date_data}}</h2>
                    <p class="timeline__content-desc">{{$capsule_single_data->descriptif}}</p>
                </div>
            </div>
            @endforeach
            <!-- <div class="timeline-item" data-text="FATHER OF THE TURKS">
                <div class="timeline__content"><img class="timeline__img" src="http://i.cdn.ensonhaber.com/resimler/diger/ataturk_3473.jpg" />
                    <h2 class="timeline__content-title">1881</h2>
                    <p class="timeline__content-desc">He was born in 1881 (probably in the spring) in Salonica, then an Ottoman city, now inGreece. His father Ali Riza, a customs official turned lumber merchant, died when Mustafawas still a boy. His mother Zubeyde, adevout and strong-willed woman, raised him and his sister.</p>
                </div>
            </div> -->
        </div>
    </div>
    <div class="demo-footer"><a href="http://www.turkishnews.com/Ataturk/life.htm" target="_blank">Source/Kaynak</a></div>

</div>