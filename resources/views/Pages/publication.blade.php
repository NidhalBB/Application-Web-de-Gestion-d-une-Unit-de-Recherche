@extends('layouts.appEP')
<style>
  .reson_area .single_reson .help_content {
  background: #fff;
  position: absolute;
  bottom: 0;
  right: 0;
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
  border-radius: 7px;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
  padding: 47px 40px 33px 40px;
  left: 46px;
}

/* line 34, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content h4 {
  font-size: 20px;
  font-weight: 400;
}

/* line 38, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content p {
  margin-top: 21px;
  margin-bottom: 30px;
}

/* line 42, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content .read_more {
  font-size: 16px;
  color: #BCBDBF;
  text-transform: capitalize;
  position: relative;
  display: inline-block;
  padding-left: 68px;
}

/* line 49, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content .read_more::before {
  position: absolute;
  left: 0;
  top: 50%;
  width: 36px;
  height: 2px;
  background: #707070;
  content: '';
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

/* line 60, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content .read_more:hover {
  color: #3CC78F;
}

/* line 62, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content .read_more:hover::before {
  background: #3CC78F;
}
  </style>
@section('content')
<div class="row align-items-center justify-content-center text-center">
    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h1>@lang('home.Publications')</h1>
        </div>
      </div>
    </div>
 </div>
@endsection

@section('content1')
<div class="row justify-content-center mb-5">
  
</div>
<form action="/searchpublication" method="GET">
  {{ csrf_field() }}
<div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
  <div class="input-group">
    <input type="search" placeholder="Quelle est votre recherche ?" aria-describedby="button-addon1" class="form-control border-0 bg-light" name="search">
    <div class="input-group-append">
      <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
    </div>
  </div>
</div>
</form>

      <div class="row">
        <div class="list-group">
          @if (count($publications)>0)
          @foreach ($publications as $item)
          <div class="shadow p-3 mb-5 bg-white rounded">
          <p> {{$item->name}}&nbsp; ,&nbsp;{{$item->name1}}&nbsp; @if($item->name2 != null),&nbsp;{{$item->name2}}&nbsp;@endif @if($item->name3 != null),&nbsp;{{$item->name3}}&nbsp;@endif @if($item->name4 != null),&nbsp;{{$item->name4}}@endif
            @if($item->name5 != null){{$item->name5}}&nbsp;@endif @if($item->name6 != null) ,&nbsp;{{$item->name6}}&nbsp;@endif @if($item->name7 != null) ,&nbsp;{{$item->name7}}&nbsp;@endif @if($item->name8 != null),&nbsp;{{$item->name8}}&nbsp; @endif @if($item->name9 != null) ,&nbsp;{{$item->name9}}&nbsp;@endif 
            @if($item->name10 != null),&nbsp;{{$item->name10}}&nbsp;@endif @if($item->name11 != null),&nbsp;{{$item->name11}}&nbsp;@endif @if($item->name12 != null),&nbsp;{{$item->name12}}&nbsp;@endif @if($item->name13 != null) ,&nbsp;{{$item->name13}}&nbsp;@endif @if($item->name14 != null) ,&nbsp;{{$item->name14}}&nbsp; @ENDIF @if($item->name15 != null)&nbsp;{{$item->name15}}&nbsp;@endif ,&nbsp;{{$item->titre}}&nbsp; ,&nbsp;{{$item->volume}}&nbsp; ,&nbsp;{{$item->journal}} &nbsp; ,&nbsp;{{$item->page}}&nbsp; ,&nbsp;{{$item->date}} <a href="{{$item->doi}}">{{$item->doi}} </a></p>
            
      @if(!empty($item->file))
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
        <a href="{{ asset('/storage/file')}}/{{$item->file}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"/>
          <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"/>
          <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"/>
        </svg></a>
      </div>@ENDIF
            
          </div>
          <br/>
          @endforeach
        @else
        </div>
    </div>
        <div class="col-md-12 ftco-animate">
          <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
            <div class="mb-4 mb-md-0 mr-5">
              <div class="job-post-item-header d-flex align-items-center">
                <h2 class="mr-3 text-black h3"> @lang('home.AUCUNE Publications trouvée')</h2>
              </div>
          </div>
          
        </div><!-- end -->
        @endif
      </div>
 
  <div class="row pagination-wrap">
    <div class="col-md-6 text-center text-md-right">
        {{$publications->links()}}
    </div>
  </div>
@endsection
