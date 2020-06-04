@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($a as $index => $a)
        <div class="col-md-8 gj" id="gj{{$index}}">
            <div class="card">
                <div class="card-header text-primary">#{{$index+1}} 
                <span class="text-dark"> {{$a->nama}}</span>
                </div>
                <div class="card-body">
                <div class="row justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rd{{$index}}" id="rd{{$index}}" value="ya">
                        <label class="form-check-label" for="rd{{$index}}">
                            Ya
                        </label>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rd{{$index}}" id="exampleRadios1" value="no">
                        <label class="form-check-label" for="rd{{$index}}">
                            Tidak
                        </label>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('input:radio[name="rd{{$index}}"]').on('change', function(e){
            var res = e.target.value;
            // alert(resSoalID);
            if(res=='ya'){
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{url('/store')}}",
                    data: {
                        "gejalaID" : {{$a->id}},
                    },
                    success: function(data){}
                })
            }
            if(res=='no'){
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{url('/destroy')}}",
                    data: {
                        "gejalaID" : {{$a->id}},
                    },
                    success: function(data){}
                })
            }
            
            })
        </script>
        @endforeach
        
        
        
    </div>
    <div class="row justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">

            @foreach($b as $ia => $b)
                @if($loop->first)
                <li class="page-item link{{$ia}} mk active">
                    <a class="page-link pg" dataID="{{$ia}}">{{$ia+1}}</a>
                </li>
                @else
                <li class="page-item link{{$ia}} mk">
                    <a class="page-link pg" dataID="{{$ia}}">{{$ia+1}}</a>
                </li>
                @endif
            @endforeach
            
        </ul>
    </nav>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".gj").hide();
        $("#gj0").show();

        $('.pg').on('click', function(){
            var ya = $(this).attr("dataID");
            $(".gj").hide();
            $(".mk").removeClass("active");
            $(".link"+ya).addClass("active");
            $("#gj"+ya).show();
        });
    });
</script>
@endsection
