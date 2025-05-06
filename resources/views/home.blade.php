@include('common.header')
<h1 class="text-4xl">Home Page no blade</h1>

<style>
    .success {
        background: lightgreen;
        color: green;
        padding: 3px 10px;
    }
</style>

<x-message-banner msg="user login successfully"/>
<x-message-banner msg="Success"/>

@include('common.inner', ['page' => "this is home page"])