@if (array_key_exists('youtube', View::getSections()))
    <!-- Intro -->
    <div class="video-responsive">
        <iframe 
            width="100%"
            height="575px"
            src="https://www.youtube.com/embed/@yield('youtube')" 
            frameborder="0"
            allowfullscreen
        ></iframe>
    </div>
@else
    <img 
        src="/images/main-title.jpg"
        title="Eloquent 101"
        alt="Eloquent 101"
        class="img-responsive" 
    />
@endif
