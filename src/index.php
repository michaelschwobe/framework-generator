<?php $page_title  = 'Base'; require_once '_includes/app-head.php'; ?>


<div class="app-section-title">Headings / Paragraphs</div>


<h1>Heading 1</h1>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<h2>Heading 2</h2>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<h3>Heading 3</h3>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<h4>Heading 4</h4>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<h5>Heading 5</h5>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<h6>Heading 6</h6>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Images</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<p><img alt="Placeholder Image and Some Alt Text" src="http://placehold.it/350x150" title="A title element for this placeholder image."></p>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Figure / Figcaption</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<figure>
  <img src="http://placehold.it/350x150" alt="A placeholder figure image." />
  <figcaption>The figcaption element example</figcaption>
</figure>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Blockquote</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<blockquote>
  <p>&ldquo;<strong>This is a blockquote.</strong> <?php echo $lorem_md; ?>&rdquo;</p>
  <footer>This is the <cite>Cite title</cite> by the <cite>Cite author</cite></footer>
</blockquote>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Details / Summary</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<details>
  <summary>The summary element example</summary>
  <p>The details example text. It may be styled differently based on what browser or operating system you are using.</p>
</details>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Pre / Code</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<pre><code>// Loop through Divs using Javascript.
var divs = document.querySelectorAll('div');
for (let i = divs.length - 1; i >= 0; i--) {
  divs[i].style.color = "green";
}</code></pre>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Inline Elements</div>


<p>
  The <a href="#">a element</a> and <a href="http://example.com" target="_blank">external a element</a> examples<br />
  The <strong>strong element</strong> example<br />
  The <b>b element</b> example<br />
  The <em>em element</em> example<br />
  The <i>i element</i> example<br />
  The <q>q element</q> example<br />
  The <q>q element <q>inside</q> a q element</q> example<br />
  The <cite>cite element</cite> example<br />
  The <dfn>dfn element</dfn> and <dfn title="Title text">dfn element with title</dfn> examples<br />
  The <abbr>abbr element</abbr> and an <abbr title="Abbreviation">abbr</abbr> element with title examples<br />
  The <u>u element</u> example<br />
  The <ins>ins element</ins> example<br />
  The <mark>mark element</mark> example<br />
  The <del>del element</del> example<br />
  The <s>s element</s> example<br />
  The <sub>sub element</sub> example<br />
  The <sup>sup element</sup> example<br />
  The <small>small element</small> example<br />
  The <span>span element</span> example<br />
  The <time datetime="2005-05-15 19:00">time element</time> example<br />
  The <data value="3967381398">data element</data> example<br />
  The <var>var element</var> example<br />
  The <code>code element</code> example<br />
  The <kbd>kbd element</kbd> example<br />
  The <samp>samp element</samp> example<br />
  <span dir="ltr">The <bdi>bdi element</bdi> example</span><br />
  The <bdo dir="rtl">bdo element</bdo> example<br />
  http://this<wbr>.is<wbr>.a<wbr>.wbr<wbr>.element<wbr>.example<wbr>.com/With<wbr>/deeper<wbr>/level<wbr>/pages<wbr>/deeper<wbr>/level<wbr>/pages<wbr>/deeper<wbr>/level<wbr>/pages<wbr>/deeper<wbr>/level<wbr>/pages<wbr>/deeper<wbr>/level<wbr>/pages
</p>


<div class="app-section-title">Lists</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<ol>
  <li>List Item 1</li>
  <li>List Item 2</li>
  <li>List Item 3</li>
</ol>
<ol start="97">
  <li>List Item 1</li>
  <li>List Item 2</li>
  <li>List Item 3
    <ol>
      <li>List Item 3.1</li>
      <li>List Item 3.2
        <ol>
          <li>List Item 3.2.1</li>
          <li>List Item 3.2.2</li>
        </ol>
      </li>
      <li>List Item 3.3</li>
    </ol>
  </li>
  <li>List Item 4</li>
</ol>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<ul>
  <li>List Item 1</li>
  <li>List Item 2</li>
  <li>List Item 3
    <ul>
      <li>List Item 3.1</li>
      <li>List Item 3.2
        <ul>
          <li>List Item 3.2.1</li>
          <li>List Item 3.2.2</li>
        </ul>
      </li>
      <li>List Item 3.3</li>
    </ul>
  </li>
  <li>List Item 4</li>
</ul>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<dl>
  <dt>Definition Term 1</dt>
  <dd>Definition Description 1</dd>
  <dt>Definition Term 2</dt>
  <dd>Definition Description 2</dd>
  <dd>Definition Description 2</dd>
  <dd>Definition Description 2</dd>
  <dt>Definition Term 3</dt>
  <dd>Definition Description 3</dd>
</dl>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Tables</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<table>
  <caption>Table Caption 1</caption>
  <thead>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">Table Header 1</th>
      <th scope="col">Table Header 2</th>
      <th scope="col"><a href="#">Table Header 3</a></th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">Table Footing 1</th>
      <th scope="col">Table Footing 2</th>
      <th scope="col"><a href="#">Table Footing 3</a></th>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <th scope="row">Table Header A</th>
      <td>Table Cell 1</td>
      <td>Table Cell 2</td>
      <td><a href="#">Table Cell 3</a></td>
    </tr>
    <tr>
      <th scope="col" colspan="4">Table Header B (spanning all 3 columns)</th>
    </tr>
    <tr>
      <th scope="row">Table Header C</th>
      <td>Table Cell 1</td>
      <td>Table Cell 2</td>
      <td>Table Cell 3</td>
    </tr>
    <tr>
      <th scope="row">Table Header D</th>
      <td colspan="3">

          <table>
            <caption>Table Caption 2</caption>
            <thead>
              <tr>
                <th scope="col">&nbsp;</th>
                <th scope="col">Table Header 1</th>
                <th scope="col">Table Header 2</th>
                <th scope="col"><a href="#">Table Header 3</a></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th scope="col">&nbsp;</th>
                <th scope="col">Table Footing 1</th>
                <th scope="col">Table Footing 2</th>
                <th scope="col"><a href="#">Table Footing 3</a></th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <th scope="row">Table Header A</th>
                <td>Table Cell 1</td>
                <td>Table Cell 2</td>
                <td><a href="#">Table Cell 3</a></td>
              </tr>
              <tr>
                <th scope="col" colspan="4">Table Header B (spanning all 3 columns)</th>
              </tr>
              <tr>
                <th scope="row">Table Header C</th>
                <td>Table Cell 1</td>
                <td>Table Cell 2</td>
                <td>Table Cell 3</td>
              </tr>
            </tbody>
          </table>

      </td>
    </tr>
    <tr>
      <th scope="row">Table Header E</th>
      <td>Table Cell 1</td>
      <td>Table Cell 2</td>
      <td>Table Cell 3</td>
    </tr>
  </tbody>
</table>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Audio / Video / Iframe</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<audio controls>
  <source src="http://www.w3schools.com/tags/horse.ogg" type="audio/ogg" />
  <source src="http://www.w3schools.com/tags/horse.mp3" type="audio/mpeg" />
  Your browser does not support the audio element.
</audio>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<video width="320" height="240" controls>
  <source src="http://www.w3schools.com/tags/movie.mp4" type="video/mp4" />
  <source src="http://www.w3schools.com/tags/movie.ogg" type="video/ogg" />
  Your browser does not support the video tag.
</video>
<p>Paragraph. <?php echo $lorem_md; ?></p>
<iframe width="560" height="315" src="http://www.youtube.com/embed/l4f9QF0SGuQ" frameborder="0" allowfullscreen></iframe>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<div class="app-section-title">Forms</div>


<p>Paragraph. <?php echo $lorem_md; ?></p>
<!-- Other attributes: validate, novalidate, autofocus, required, autocomplete="on", selected -->
<form id="form-untitled" method="post" action="#" validate>
  <noscript>
    <input id="nojs" name="nojs" type="hidden" />
  </noscript>
  <p>
    <label for="field_file">File</label>
    <input id="field_file" type="file" multiple /></label>
  </p>
  <p>
    <label for="field_color">Color</label>
    <input id="field_color" type="color" value="#000000" placeholder="#000000" />
  </p>
  <p>
    <label for="field_output">Output</label>
    <output id="field_output" name="result">42</output>
  </p>
  <p>
    <label for="field_progress">Progress</label>
    <progress id="field_progress" value="65" max="100"></progress>
  </p>
  <p>
    <label for="field_meter">Meter</label>
    <meter id="field_meter" min="200" max="500" value="350">350 degrees</meter>
  </p>
  <p>
    <label for="field_range">Range</label>
    <input id="field_range" type="range" min="0" max="10" step="2" value="6" />
  </p>
  <p>
    <label for="field_number">Number</label>
    <input id="field_number" type="number" min="0" max="10" step="1" value="5" placeholder="Enter a number between 0 and 10" />
  </p>
  <p>
    <label for="field_time">Time</label>
    <input id="field_time" type="time" value="13:00:00" />
  </p>
  <p>
    <label for="field_week">Week</label>
    <input id="field_week" type="week" value="1970-W01" />
  </p>
  <p>
    <label for="field_month">Month</label>
    <input id="field_month" type="month" value="1970-01" />
  </p>
  <p>
    <label for="field_date">Date</label>
    <input id="field_date" type="date" value="1970-01-01" />
  </p>
  <p>
    <label for="field_datetime">Datetime</label>
    <input id="field_datetime" type="datetime" value="1970-01-01T00:00:00Z" />
  </p>
  <p>
    <label for="field_datetime_local">Datetime-local</label>
    <input id="field_datetime_local" type="datetime-local" value="1970-01-01T00:00" />
  </p>
  <p>
    <label for="field_search">Search</label>
    <input id="field_search" type="search" placeholder="Search this site for&hellip;" />
  </p>
  <p>
    <label for="field_password">Password</label>
    <input id="field_password" type="password" pattern=".{8,16}" maxlength="16" placeholder="8&ndash;16 characters" value="password" />
  </p>
  <p>
    <label for="field_url">URL</label>
    <input id="field_url" type="url" placeholder="http://example.com" />
  </p>
  <p>
    <label for="field_email">Email</label>
    <input id="field_email" type="email" type="email" autocapitalize="off" autocorrect="off" autocomplete="email" placeholder="example@example.com" />
  </p>
  <p>
    <label for="field_tel">Tel</label>
    <input id="field_tel" type="tel" autocorrect="off" autocomplete="tel" placeholder="(555) 555-5555" />
  </p>
  <p>
    <label for="field_text">Text</label>
    <input id="field_text" type="text" value="default value that goes on and on without stopping or punctuation" />
  </p>
  <p>
    <label for="field_text_readonly">Text (readonly)</label>
    <input id="field_text_readonly" type="text" value="I'm readonly" readonly />
  </p>
  <p>
    <label for="field_text_disabled">Text (disabled)</label>
    <input id="field_text_disabled" type="text" value="I'm disabled" disabled />
  </p>
  <p>
    <label for="field_select">Select</label>
    <select id="field_select">
      <option value="">Please select&hellip;</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      <optgroup label="optgroup">
        <option value="A">Option A</option>
        <option value="B">Option B</option>
        <option value="C">Option C</option>
        <option value="D" disabled>Option Disabled</option>
      </optgroup>
    </select>
  </p>
  <p>
    <label for="field_select_disabled">Select (disabled)</label>
    <select id="field_select_disabled" disabled>
      <option value="1">Option Unselectable</option>
      <option value="2">Option Hidden</option>
    </select>
  </p>
  <p>
    <label for="field_datalist">Datalist</label>
    <input id="field_datalist" type="datalist" name="browser" list="browsers" />
    <datalist id="browsers">
      <option value="Edge" />
      <option value="Firefox" />
      <option value="Chrome" />
      <option value="Opera" />
      <option value="Safari" />
    </datalist>
  </p>
  <p>
    <label for="field_select_multiple">Select-multi</label>
    <select id="field_select_multiple" size="5" multiple>
      <option value="">Please select&hellip;</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      <optgroup label="optgroup">
        <option value="A">Option A</option>
        <option value="B">Option B</option>
        <option value="C">Option C</option>
        <option value="D" disabled>Option Disabled</option>
      </optgroup>
    </select>
  </p>
  <p>
    <label for="field_textarea">Textarea</label>
    <textarea id="field_textarea" cols="30" rows="5" spellcheck="true" placeholder="Type a message&hellip;"></textarea>
  </p>
  <p>
    <label for="field_textarea_readonly">Textarea (readonly)</label>
    <textarea id="field_textarea_readonly" cols="30" rows="5" spellcheck="true" readonly>I'm readonly</textarea>
  </p>
  <p>
    <label for="field_textarea_disabled">Textarea (disabled)</label>
    <textarea id="field_textarea_disabled" cols="30" rows="5" spellcheck="true" disabled>I'm disabled</textarea>
  </p>
  <fieldset>
    <legend>Radio Fieldset</legend>
    <p>
      <label>
        <input id="field_radio_A1" name="radio_group_A" type="radio" value="Radio A1" />
        <span>Radio A1</span>
      </label>
      <label>
        <input id="field_radio_A2" name="radio_group_A" type="radio" value="Radio A2" />
        <span>Radio A2</span>
      </label>
      <label>
        <input id="field_radio_A3" name="radio_group_A" type="radio" value="Radio A3" checked />
        <span>Radio A3 (checked)</span>
      </label>
      <label>
        <input id="field_radio_A4" name="radio_group_A" type="radio" value="Radio A4" disabled />
        <span>Radio A4 (disabled)</span>
      </label>
    </p>
  </fieldset>
  <fieldset>
    <legend>Radio Fieldset</legend>
    <p>
      <input id="field_radio_B1" name="radio_group_B" type="radio" value="Radio B1" />
      <label for="field_radio_B1">Radio B1</label>
    </p>
    <p>
      <input id="field_radio_B2" name="radio_group_B" type="radio" value="Radio B2" />
      <label for="field_radio_B2">Radio B2</label>
    </p>
    <p>
      <input id="field_radio_B3" name="radio_group_B" type="radio" value="Radio B3" checked />
      <label for="field_radio_B3">Radio B3 (checked)</label>
    </p>
    <p>
      <input id="field_radio_B4" name="radio_group_B" type="radio" value="Radio B4" disabled />
      <label for="field_radio_B4">Radio B4 (disabled)</label>
    </p>
  </fieldset>
  <fieldset>
    <legend>Checkbox Fieldset</legend>
    <p>
      <label>
        <input id="field_checkbox_A1" name="checkbox_group_A" type="checkbox" value="Checkbox A1" />
        <span>Checkbox A1</span>
      </label>
      <label>
        <input id="field_checkbox_A2" name="checkbox_group_A" type="checkbox" value="Checkbox A2" />
        <span>Checkbox A2</span>
      </label>
      <label>
        <input id="field_checkbox_A3" name="checkbox_group_A" type="checkbox" value="Checkbox A3" checked />
        <span>Checkbox A3 (checked)</span>
      </label>
      <label>
        <input id="field_checkbox_A4" name="checkbox_group_A" type="checkbox" value="Checkbox A4" disabled />
        <span>Checkbox A4 (disabled)</span>
      </label>
    </p>
  </fieldset>
  <fieldset>
    <legend>Checkbox Fieldset</legend>
    <p>
      <input id="field_checkbox_B1" name="checkbox_group_B" type="checkbox" value="Checkbox B1" />
      <label for="field_checkbox_B1">Checkbox B1</label>
    </p>
    <p>
      <input id="field_checkbox_B2" name="checkbox_group_B" type="checkbox" value="Checkbox B2" />
      <label for="field_checkbox_B2">Checkbox B2</label>
    </p>
    <p>
      <input id="field_checkbox_B3" name="checkbox_group_B" type="checkbox" value="Checkbox B3" checked />
      <label for="field_checkbox_B3">Checkbox B3 (checked)</label>
    </p>
    <p>
      <input id="field_checkbox_B4" name="checkbox_group_B" type="checkbox" value="Checkbox B4" disabled />
      <label for="field_checkbox_B4">Checkbox B3 (disabled)</label>
    </p>
  </fieldset>
  <p>
    <button type="button">Button</button>
    <input type="reset" value="Reset" />
    <input type="submit" value="Submit" />
  </p>
</form>
<p>Paragraph. <?php echo $lorem_md; ?></p>


<?php require_once '_includes/app-foot.php'; ?>
