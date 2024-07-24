<div class="title">
  <h1 class="title">Berita</h1>
  <div class="line"></div>
</div>
<section id="news">
  <div class="topnews" @if(Request::routeIs('main.berita')) style="width: 60vw;" @endif>
    @if(Request::routeIs('main.index'))
      <img src="{{ asset($news[0]['img']) }}" alt="">
      <div class="heading">
        <h1 class="title">{{ $news[0]['title'] }}</h1>
        <div class="date">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M12.6667 2.66683H11.3334V2.00016C11.3334 1.82335 11.2631 1.65378 11.1381 1.52876C11.0131 1.40373 10.8435 1.3335 10.6667 1.3335C10.4899 1.3335 10.3203 1.40373 10.1953 1.52876C10.0703 1.65378 10 1.82335 10 2.00016V2.66683H6.00004V2.00016C6.00004 1.82335 5.9298 1.65378 5.80478 1.52876C5.67975 1.40373 5.51018 1.3335 5.33337 1.3335C5.15656 1.3335 4.98699 1.40373 4.86197 1.52876C4.73695 1.65378 4.66671 1.82335 4.66671 2.00016V2.66683H3.33337C2.80294 2.66683 2.29423 2.87754 1.91916 3.25262C1.54409 3.62769 1.33337 4.1364 1.33337 4.66683V12.6668C1.33337 13.1973 1.54409 13.706 1.91916 14.081C2.29423 14.4561 2.80294 14.6668 3.33337 14.6668H12.6667C13.1971 14.6668 13.7058 14.4561 14.0809 14.081C14.456 13.706 14.6667 13.1973 14.6667 12.6668V4.66683C14.6667 4.1364 14.456 3.62769 14.0809 3.25262C13.7058 2.87754 13.1971 2.66683 12.6667 2.66683ZM13.3334 12.6668C13.3334 12.8436 13.2631 13.0132 13.1381 13.1382C13.0131 13.2633 12.8435 13.3335 12.6667 13.3335H3.33337C3.15656 13.3335 2.98699 13.2633 2.86197 13.1382C2.73695 13.0132 2.66671 12.8436 2.66671 12.6668V8.00016H13.3334V12.6668ZM13.3334 6.66683H2.66671V4.66683C2.66671 4.49002 2.73695 4.32045 2.86197 4.19542C2.98699 4.0704 3.15656 4.00016 3.33337 4.00016H4.66671V4.66683C4.66671 4.84364 4.73695 5.01321 4.86197 5.13823C4.98699 5.26326 5.15656 5.3335 5.33337 5.3335C5.51018 5.3335 5.67975 5.26326 5.80478 5.13823C5.9298 5.01321 6.00004 4.84364 6.00004 4.66683V4.00016H10V4.66683C10 4.84364 10.0703 5.01321 10.1953 5.13823C10.3203 5.26326 10.4899 5.3335 10.6667 5.3335C10.8435 5.3335 11.0131 5.26326 11.1381 5.13823C11.2631 5.01321 11.3334 4.84364 11.3334 4.66683V4.00016H12.6667C12.8435 4.00016 13.0131 4.0704 13.1381 4.19542C13.2631 4.32045 13.3334 4.49002 13.3334 4.66683V6.66683Z" fill="black"/>
          </svg>
          <p>{{ $news[0]['date'] }}</p>
        </div>
      </div>
      <div class="thenews">
        <p class="description">{{ implode(' ', array_slice(explode(' ', $news[0]['content']), 0, 30)) }}</p>
        <p class="more">Selengkapnya...</p>
      </div>
    @elseif(Request::routeIs('main.berita'))
    <div class="image" style="background-image: url('{{ asset($news[0]['img']) }}')">
      <div class="title-container">
        <h1 class="title">{{ $news[0]['title'] }}</h1>
      </div>
    </div>
    <div class="list-berita">
      @for($i = 1; $i <= 4; $i++)
        <div class="item-berita">
          <img src="{{ asset($news[$i]['img']) }}" alt="">
          <div class="content">
            <h1>{{ $news[$i]['title'] }}</h1>
            <div class="date">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M12.6667 2.66683H11.3334V2.00016C11.3334 1.82335 11.2631 1.65378 11.1381 1.52876C11.0131 1.40373 10.8435 1.3335 10.6667 1.3335C10.4899 1.3335 10.3203 1.40373 10.1953 1.52876C10.0703 1.65378 10 1.82335 10 2.00016V2.66683H6.00004V2.00016C6.00004 1.82335 5.9298 1.65378 5.80478 1.52876C5.67975 1.40373 5.51018 1.3335 5.33337 1.3335C5.15656 1.3335 4.98699 1.40373 4.86197 1.52876C4.73695 1.65378 4.66671 1.82335 4.66671 2.00016V2.66683H3.33337C2.80294 2.66683 2.29423 2.87754 1.91916 3.25262C1.54409 3.62769 1.33337 4.1364 1.33337 4.66683V12.6668C1.33337 13.1973 1.54409 13.706 1.91916 14.081C2.29423 14.4561 2.80294 14.6668 3.33337 14.6668H12.6667C13.1971 14.6668 13.7058 14.4561 14.0809 14.081C14.456 13.706 14.6667 13.1973 14.6667 12.6668V4.66683C14.6667 4.1364 14.456 3.62769 14.0809 3.25262C13.7058 2.87754 13.1971 2.66683 12.6667 2.66683ZM13.3334 12.6668C13.3334 12.8436 13.2631 13.0132 13.1381 13.1382C13.0131 13.2633 12.8435 13.3335 12.6667 13.3335H3.33337C3.15656 13.3335 2.98699 13.2633 2.86197 13.1382C2.73695 13.0132 2.66671 12.8436 2.66671 12.6668V8.00016H13.3334V12.6668ZM13.3334 6.66683H2.66671V4.66683C2.66671 4.49002 2.73695 4.32045 2.86197 4.19542C2.98699 4.0704 3.15656 4.00016 3.33337 4.00016H4.66671V4.66683C4.66671 4.84364 4.73695 5.01321 4.86197 5.13823C4.98699 5.26326 5.15656 5.3335 5.33337 5.3335C5.51018 5.3335 5.67975 5.26326 5.80478 5.13823C5.9298 5.01321 6.00004 4.84364 6.00004 4.66683V4.00016H10V4.66683C10 4.84364 10.0703 5.01321 10.1953 5.13823C10.3203 5.26326 10.4899 5.3335 10.6667 5.3335C10.8435 5.3335 11.0131 5.26326 11.1381 5.13823C11.2631 5.01321 11.3334 4.84364 11.3334 4.66683V4.00016H12.6667C12.8435 4.00016 13.0131 4.0704 13.1381 4.19542C13.2631 4.32045 13.3334 4.49002 13.3334 4.66683V6.66683Z" fill="black"/>
              </svg>
              <p>{{ $news[$i]['date'] }}</p>
            </div>
            <p class="description">{{ implode(' ', array_slice(explode(' ', $news[$i]['content']), 0, 30)) }}...</p>
            <a href="">Baca Selengkapnya</a>
          </div>
        </div>
      @endfor
    </div>
    @endif
  </div>
  <div class="top-3-news">
    @if(Request::routeIs('main.index'))
      <div class="top-2-news">
        @for($i = 1; $i <= 2; $i++)
          <div class="berita-{{ $i }}">
            <img class="berita-{{ $i }}" src="{{ asset($news[$i]['img']) }}" alt="">
            <div class="overlay-berita-{{ $i }}">
              <h1 class="text">{{ $news[$i]['title'] }}</h1>
              <div class="date">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M12.6667 2.66683H11.3334V2.00016C11.3334 1.82335 11.2631 1.65378 11.1381 1.52876C11.0131 1.40373 10.8435 1.3335 10.6667 1.3335C10.4899 1.3335 10.3203 1.40373 10.1953 1.52876C10.0703 1.65378 10 1.82335 10 2.00016V2.66683H6.00004V2.00016C6.00004 1.82335 5.9298 1.65378 5.80478 1.52876C5.67975 1.40373 5.51018 1.3335 5.33337 1.3335C5.15656 1.3335 4.98699 1.40373 4.86197 1.52876C4.73695 1.65378 4.66671 1.82335 4.66671 2.00016V2.66683H3.33337C2.80294 2.66683 2.29423 2.87754 1.91916 3.25262C1.54409 3.62769 1.33337 4.1364 1.33337 4.66683V12.6668C1.33337 13.1973 1.54409 13.706 1.91916 14.081C2.29423 14.4561 2.80294 14.6668 3.33337 14.6668H12.6667C13.1971 14.6668 13.7058 14.4561 14.0809 14.081C14.456 13.706 14.6667 13.1973 14.6667 12.6668V4.66683C14.6667 4.1364 14.456 3.62769 14.0809 3.25262C13.7058 2.87754 13.1971 2.66683 12.6667 2.66683ZM13.3334 12.6668C13.3334 12.8436 13.2631 13.0132 13.1381 13.1382C13.0131 13.2633 12.8435 13.3335 12.6667 13.3335H3.33337C3.15656 13.3335 2.98699 13.2633 2.86197 13.1382C2.73695 13.0132 2.66671 12.8436 2.66671 12.6668V8.00016H13.3334V12.6668ZM13.3334 6.66683H2.66671V4.66683C2.66671 4.49002 2.73695 4.32045 2.86197 4.19542C2.98699 4.0704 3.15656 4.00016 3.33337 4.00016H4.66671V4.66683C4.66671 4.84364 4.73695 5.01321 4.86197 5.13823C4.98699 5.26326 5.15656 5.3335 5.33337 5.3335C5.51018 5.3335 5.67975 5.26326 5.80478 5.13823C5.9298 5.01321 6.00004 4.84364 6.00004 4.66683V4.00016H10V4.66683C10 4.84364 10.0703 5.01321 10.1953 5.13823C10.3203 5.26326 10.4899 5.3335 10.6667 5.3335C10.8435 5.3335 11.0131 5.26326 11.1381 5.13823C11.2631 5.01321 11.3334 4.84364 11.3334 4.66683V4.00016H12.6667C12.8435 4.00016 13.0131 4.0704 13.1381 4.19542C13.2631 4.32045 13.3334 4.49002 13.3334 4.66683V6.66683Z" fill="white"/>
                </svg>
                <p>{{ $news[$i]['date'] }}</p>
              </div>
            </div>
          </div>
        @endfor
      </div>
    @endif
    <div class="listnews" @if(Request::routeIs('main.berita')) style="align-items: start;" @endif>
      @if(Request::routeIs('main.berita'))
        <form action="" method="POST">
          @csrf
          <input type="text" placeholder="Cari Judul Berita">
          <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path d="M20.6667 18.6667H19.6133L19.24 18.3067C20.5918 16.7387 21.3348 14.7369 21.3333 12.6667C21.3333 10.9526 20.825 9.27696 19.8727 7.85173C18.9204 6.4265 17.5669 5.31567 15.9833 4.65971C14.3996 4.00376 12.6571 3.83213 10.9759 4.16653C9.29472 4.50094 7.75047 5.32636 6.53841 6.53841C5.32636 7.75047 4.50094 9.29472 4.16653 10.9759C3.83213 12.6571 4.00376 14.3996 4.65971 15.9833C5.31567 17.5669 6.4265 18.9204 7.85173 19.8727C9.27696 20.825 10.9526 21.3333 12.6667 21.3333C14.8133 21.3333 16.7867 20.5467 18.3067 19.24L18.6667 19.6133V20.6667L25.3333 27.32L27.32 25.3333L20.6667 18.6667ZM12.6667 18.6667C9.34667 18.6667 6.66667 15.9867 6.66667 12.6667C6.66667 9.34667 9.34667 6.66667 12.6667 6.66667C15.9867 6.66667 18.6667 9.34667 18.6667 12.6667C18.6667 15.9867 15.9867 18.6667 12.6667 18.6667Z" fill="black"/>
            </svg>
          </button>
        </form>
        <div class="title" style="margin-bottom: 24px;">
          <h1 class="title" style="font-size: 24px;">Berita terkini</h1>
          <div class="line"></div>
        </div>
      @endif
      <ul @if(Request::routeIs('main.berita')) style="display: flex; flex-direction: column;gap: 24px;" @endif>
        @for($i = 3; $i <= 10; $i++ )
          <li>
            <div class="list" @if(Request::routeIs('main.berita')) style="gap: 16px;" @endif>
              <img @if(Request::routeIs('main.index')) class="index" @elseif(Request::routeIs('main.berita')) class="menu" @endif src="{{ asset($news[$i]['img']) }}" alt="">
              <div class="heading">
                <div class="date">
                  @if(Request::routeIs('main.index'))
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path d="M12.6667 2.66683H11.3334V2.00016C11.3334 1.82335 11.2631 1.65378 11.1381 1.52876C11.0131 1.40373 10.8435 1.3335 10.6667 1.3335C10.4899 1.3335 10.3203 1.40373 10.1953 1.52876C10.0703 1.65378 10 1.82335 10 2.00016V2.66683H6.00004V2.00016C6.00004 1.82335 5.9298 1.65378 5.80478 1.52876C5.67975 1.40373 5.51018 1.3335 5.33337 1.3335C5.15656 1.3335 4.98699 1.40373 4.86197 1.52876C4.73695 1.65378 4.66671 1.82335 4.66671 2.00016V2.66683H3.33337C2.80294 2.66683 2.29423 2.87754 1.91916 3.25262C1.54409 3.62769 1.33337 4.1364 1.33337 4.66683V12.6668C1.33337 13.1973 1.54409 13.706 1.91916 14.081C2.29423 14.4561 2.80294 14.6668 3.33337 14.6668H12.6667C13.1971 14.6668 13.7058 14.4561 14.0809 14.081C14.456 13.706 14.6667 13.1973 14.6667 12.6668V4.66683C14.6667 4.1364 14.456 3.62769 14.0809 3.25262C13.7058 2.87754 13.1971 2.66683 12.6667 2.66683ZM13.3334 12.6668C13.3334 12.8436 13.2631 13.0132 13.1381 13.1382C13.0131 13.2633 12.8435 13.3335 12.6667 13.3335H3.33337C3.15656 13.3335 2.98699 13.2633 2.86197 13.1382C2.73695 13.0132 2.66671 12.8436 2.66671 12.6668V8.00016H13.3334V12.6668ZM13.3334 6.66683H2.66671V4.66683C2.66671 4.49002 2.73695 4.32045 2.86197 4.19542C2.98699 4.0704 3.15656 4.00016 3.33337 4.00016H4.66671V4.66683C4.66671 4.84364 4.73695 5.01321 4.86197 5.13823C4.98699 5.26326 5.15656 5.3335 5.33337 5.3335C5.51018 5.3335 5.67975 5.26326 5.80478 5.13823C5.9298 5.01321 6.00004 4.84364 6.00004 4.66683V4.00016H10V4.66683C10 4.84364 10.0703 5.01321 10.1953 5.13823C10.3203 5.26326 10.4899 5.3335 10.6667 5.3335C10.8435 5.3335 11.0131 5.26326 11.1381 5.13823C11.2631 5.01321 11.3334 4.84364 11.3334 4.66683V4.00016H12.6667C12.8435 4.00016 13.0131 4.0704 13.1381 4.19542C13.2631 4.32045 13.3334 4.49002 13.3334 4.66683V6.66683Z" fill="#C4D82D"/>
                    </svg>
                  @endif
                  <p style="color: black; font-weight: bold">@if(Request::routeIs('main.index')) {{ $news[$i]['date'] }} @elseif(Request::routeIs('main.berita')) {{ $news[$i]['title'] }} @endif</p>
                </div>
                <h3>@if(Request::routeIs('main.index')) {{ $news[$i]['title'] }} @elseif(Request::routeIs('main.berita')) {{ $news[$i]['date'] }} @endif</h3>
              </div>
            </div>
            @if(Request::routeIs('main.index'))
              <hr>
            @endif
          </li>
        @endfor
      </ul>
  </div>
</div>
</section>