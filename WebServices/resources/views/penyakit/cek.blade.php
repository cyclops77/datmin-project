@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="mb-5 text-center">Pilih ya jika anda mengalami gejala berikut ini.</h3>
        </div>
        @foreach($a as $index => $a)
        <div class="col-md-8 gj" id="gj{{$index}}">
            <div class="card">
                <div class="card-header text-primary">#{{$index+1}} 
                <span class="text-dark"> {{$a->nama}}</span>
                </div>
                <div class="card-body" style="height: 250px">
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
                <div class="mb-2 row d-flex justify-content-between">
                    @if(!$loop->first)
                    <div class="ml-4 float-left">
                        <button class="btn btn-primary btnBack" dataID="{{$index-1}}">Kembali</button>
                    </div>
                    @else
                    <div class="ml-4 float-left">
                    </div>
                    @endif
                    
                    @if(!$loop->last)
                    <div class="mr-4 float-right">
                        <button class="btn btn-primary btnLanjut" dataID="{{$index+1}}">Selanjutnya</button>
                    </div>
                    @else
                    <div class="mr-4 float-right">
                        <a href="{{url('/done')}}" class="btn btn-primary">Selesai</a>
                    </div>
                    @endif
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
    <div class="row justify-content-center mt-3">
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
        $(".btnLanjut").on('click', function(){
            var ya =$(this).attr("dataID");
            $(".gj").hide();
            $(".mk").removeClass("active");
            $(".link"+ya).addClass("active");
            $("#gj"+ya).show();
        });

        $(".btnBack").on('click', function(){
            var ya =$(this).attr("dataID");
            $(".gj").hide();
            $(".mk").removeClass("active");
            $(".link"+ya).addClass("active");
            $("#gj"+ya).show();
        });
    });
</script>
@endsection
