@extends("base")

@section('head')
    <title>markdown</title>
@endsection

@section('body')
    <main>
      <h1>Markdown Formatting</h1>
      <section>
        <h2>Headers</h2>
        <h3>Heading 3...</h3>
        <h4>Heading 4...</h4>
        <h5>Heading 5...</h5>
        <h6>Heading 6...</h6>
      </section>
      <section>
        <h2>Inline Text Formatting</h2>
        <p>This is what some text formatting looks like! This is <b>Bold Text</b>, <i>Italic Text</i>, and <s>Strikethrough Text</s>. There is also <mark>Highlighted Text</mark>, <u>Underlined Text</u> and <code>text formatted like code</code>! Text can also have hyperlinks to somewhere on <a class="int-link" href="{{ route('markdown',[],false) }}">this site</a> or a <a class="ext-link" href="https://github.com/novalastix/novalastix.com">different site</a>.</p>
      </section>
      <section>
        <h2>Block Text Formatting</h2>
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
      <section>
        <table>
            <caption>This shows  table formatting!</caption>
            <thead>
              <tr>
                <th>Month</th>
                <th>Savings</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>January</td>
                <td>$100</td>
              </tr>
              <tr>
                <td>February</td>
                <td>$80</td>
              </tr>
              <tr>
                <td>March</td>
                <td>$90</td>
              </tr>
            </tbody>
          </table> 
      </section>
    </main>
@endsection