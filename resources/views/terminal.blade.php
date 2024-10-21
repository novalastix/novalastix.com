@extends("base")

@section('head')
    <title>Terminal</title>
    <link rel="stylesheet" href="{{ asset('css/terminal.css') }}">
@endsection

@section('body')
<main class="unloaded">
  
    <section class="terminal title" id="title">AEON TERMINAL</section>
    <section class="terminal output" id="terminal-output">

    <!-- <article>
        <h2>AEON Network Terminal</h2>
        <section>
            <img src="{{ asset('images/novalogo_light_t.png') }}" alt="AEON">
        </section>
    </article>

      <article>
        <h2>Headers</h2>
        <section>
          <h3>Heading 3...</h3>
          <h4>Heading 4...</h4>
          <h5>Heading 5...</h5>
          <h6>Heading 6...</h6>
        </section>
      </article>

      <article>
        <h2>Inline Text Formatting</h2>
        <section>
          <p>This is what some text formatting looks like! This is <b>Bold Text</b>, <i>Italic Text</i>, and <s>Strikethrough Text</s>. There is also <mark>Highlighted Text</mark>, <u>Underlined Text</u> and <code>text formatted like code</code>! Text can also have hyperlinks to somewhere on <a class="int-link" href="{{ route('markdown',[],false) }}">this site</a> or a <a class="ext-link" href="https://github.com/novalastix/novalastix.com">different site</a>.</p>
        </section>
      </article>

      <article>
        <h2>Block Text Formatting</h2>
        <section>
          <blockquote  cite="{{ route('markdown',[],true) }}">This text is a blockquote!<br/>- Anonymous</blockquote>
          <pre><code>This is a code block.<br/>Good for multiple lines.</code></pre>
          <ul>
              <li>An</li>
              <li>Unordered</li>
              <li>List...</li>
          </ul>
          <hr/>
          <ol>
              <li>An</li>
              <li>Ordered</li>
              <li>List!</li>
          </ol>
        </section>
      </article> -->
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
<!-- <main>
    <section class="terminal" id="terminal">
        <div id="output">a</div>
        <form id="form">
            <label id="prompt">b</label>
            <input type="text" value="c" name="input" id="input" autocomplete="off" autofocus disabled/>
            <input type="submit" style="display:none"/>
          </form>
    </section>
</main>         -->
@endsection

@section('foot')
<script src="{{ asset('js/terminal.js') }}"></script>
@endsection

