@extends('backend.backendMaster')
@section('css')
<style>
    .hello{
        color:red;
    }
</style>
@endsection
@section('content')
<div class="container">
<h1 class="hello" id="red"></h1>


</div>
@endsection
@section('js')
<script>
    let text = "acess";
console.log("sdfsd");
document.getElementById("red").innerHTML = text;
</script>
@endsection


