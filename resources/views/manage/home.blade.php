@extends('layouts.manage')

@section('content')
<div class="container" id="app">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    {{-- You are logged in! --}}
                  <pre>
                    {{-- {{ dd(json_encode(LaraFlash::allByPriority())) }} --}}
                  </pre>
                  <!-- <example-component></example-component> -->
                  <banner-slide-component></banner-slide-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
app = new Vue({
    el: "#app"
})
</script>
@endsection