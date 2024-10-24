@extends("base")

@section('head')
    <title>AEON Terminal</title>
    <link rel="stylesheet" href="{{ asset('css/terminal.css') }}">
@endsection

@section('body')
<main class="unloaded">
    <section class="terminal title" id="title">AEON TERMINAL</section>
    <section class="terminal output" id="terminal-output">
      <div class="output-line current"></div>
    </section>
    <section class="terminal input">
        <form id="form">
            <!-- <label id="prompt">b</label> -->
            <input type="text" name="input" id="input" autocomplete="off" placeholder="Enter command..."/>
            <input type="submit" id="submit" style="display:none"/>
        </form>
    </section>
</main>
@endsection

@section('foot')
<script src="{{ asset('js/terminal.js') }}"></script>
@endsection

