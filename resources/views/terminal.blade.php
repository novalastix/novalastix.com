@extends("base")

@section('head')
    <title>Terminal</title>
    <link rel="stylesheet" href="{{ asset('css/terminal.css') }}">
@endsection

@section('body')
<main>
    <section class="terminal" id="terminal">
        <div id="output">a</div>
        <form id="form">
            <label id="prompt">b</label>
            <input type="text" value="c" name="input" id="input" autocomplete="off" autofocus disabled/>
            <input type="submit" style="display:none"/>
          </form>
    </section>
</main>        
@endsection

@section('foot')
<script src="{{ asset('js/terminal.js') }}"></script>
@endsection

