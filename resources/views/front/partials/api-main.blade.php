
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Callburn API Documentation</title>

  <style>
  .highlight table td { padding: 5px; }
  .highlight table pre { margin: 0; }
  .highlight .gh {
    color: #999999;
  }
  .highlight .sr {
    color: #f6aa11;
  }
  .highlight .go {
    color: #888888;
  }
  .highlight .gp {
    color: #555555;
  }
  .highlight .gs {
  }
  .highlight .gu {
    color: #aaaaaa;
  }
  .highlight .nb {
    color: #f6aa11;
  }
  .highlight .cm {
    color: #75715e;
  }
  .highlight .cp {
    color: #75715e;
  }
  .highlight .c1 {
    color: #75715e;
  }
  .highlight .cs {
    color: #75715e;
  }
  .highlight .c, .highlight .cd {
    color: #75715e;
  }
  .highlight .err {
    color: #960050;
  }
  .highlight .gr {
    color: #960050;
  }
  .highlight .gt {
    color: #960050;
  }
  .highlight .gd {
    color: #49483e;
  }
  .highlight .gi {
    color: #49483e;
  }
  .highlight .ge {
    color: #49483e;
  }
  .highlight .kc {
    color: #66d9ef;
  }
  .highlight .kd {
    color: #66d9ef;
  }
  .highlight .kr {
    color: #66d9ef;
  }
  .highlight .no {
    color: #66d9ef;
  }
  .highlight .kt {
    color: #66d9ef;
  }
  .highlight .mf {
    color: #ae81ff;
  }
  .highlight .mh {
    color: #ae81ff;
  }
  .highlight .il {
    color: #ae81ff;
  }
  .highlight .mi {
    color: #ae81ff;
  }
  .highlight .mo {
    color: #ae81ff;
  }
  .highlight .m, .highlight .mb, .highlight .mx {
    color: #ae81ff;
  }
  .highlight .sc {
    color: #ae81ff;
  }
  .highlight .se {
    color: #ae81ff;
  }
  .highlight .ss {
    color: #ae81ff;
  }
  .highlight .sd {
    color: #e6db74;
  }
  .highlight .s2 {
    color: #e6db74;
  }
  .highlight .sb {
    color: #e6db74;
  }
  .highlight .sh {
    color: #e6db74;
  }
  .highlight .si {
    color: #e6db74;
  }
  .highlight .sx {
    color: #e6db74;
  }
  .highlight .s1 {
    color: #e6db74;
  }
  .highlight .s {
    color: #e6db74;
  }
  .highlight .na {
    color: #a6e22e;
  }
  .highlight .nc {
    color: #a6e22e;
  }
  .highlight .nd {
    color: #a6e22e;
  }
  .highlight .ne {
    color: #a6e22e;
  }
  .highlight .nf {
    color: #a6e22e;
  }
  .highlight .vc {
    color: #ffffff;
  }
  .highlight .nn {
    color: #ffffff;
  }
  .highlight .nl {
    color: #ffffff;
  }
  .highlight .ni {
    color: #ffffff;
  }
  .highlight .bp {
    color: #ffffff;
  }
  .highlight .vg {
    color: #ffffff;
  }
  .highlight .vi {
    color: #ffffff;
  }
  .highlight .nv {
    color: #ffffff;
  }
  .highlight .w {
    color: #ffffff;
  }
  .highlight {
    color: #ffffff;
  }
  .highlight .n, .highlight .py, .highlight .nx {
    color: #ffffff;
  }
  .highlight .ow {
    color: #f92672;
  }
  .highlight .nt {
    color: #f92672;
  }
  .highlight .k, .highlight .kv {
    color: #f92672;
  }
  .highlight .kn {
    color: #f92672;
  }
  .highlight .kp {
    color: #f92672;
  }
  .highlight .o {
    color: #f92672;
  }
  .toc-link {
    color: #fff !important;
  }
  .toc-link:hover {
    color: #0F75D4 !important;
  }
</style>
<link href="{{asset('laravel_assets/developers/stylesheets/screen.css')}}" rel="stylesheet" media="screen" />
<link href="{{asset('laravel_assets/developers/stylesheets/print.css')}}" rel="stylesheet" media="print" />

</head>

<body class="index" data-languages="[&quot;shell&quot;]">
  <a href="#" id="nav-button">
    <span>
      NAV
      <img src="{{asset('laravel_assets/developers/images/navbar.png')}}" alt="Navbar" />
    </span>
  </a>
  <div class="toc-wrapper">
    <img src="{{asset('laravel_assets/developers/images/logo.png')}}" class="logo" alt="Logo" />
    <div class="lang-selector">
      <a href="#" data-language-name="shell">shell</a>
    </div>
    <div class="search">
      <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>
    <div id="toc" class="toc-list-h1">
      <li>
        <a href="" ng-click="navigateTo('#introduction')" class="toc-h1 toc-link" data-title="Introduction">Introduction</a>
        <ul class="toc-list-h2 hidden" ng-class="{'show': introSection}">
          <li>
            <a href="" ng-click="navigateTo('#authentication')" class="toc-h2 toc-link" data-title="Authentication">Authentication</a>
          </li>
          <li>
            <a href="" ng-click="navigateTo('#links')" class="toc-h2 toc-link" data-title="Links">Links</a>
          </li>
          <li>
            <a href="" ng-click="navigateTo('#meta')" class="toc-h2 toc-link" data-title="Meta">Meta</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="" ng-click="navigateTo('#voice-messages')" class="toc-h1 toc-link" data-title="Callmessages">Callmessages</a>
        <ul class="toc-list-h2 hidden" ng-class="{'show': vmSection}">
          <li>
            <a href="" ng-click="navigateTo('#tts-languages')" class="toc-h2 toc-link" data-title="TTS Languages">TTS Languages</a>
          </li>
          <li>
            <a href="" ng-click="navigateTo('#audio-templates')" class="toc-h2 toc-link" data-title="Audio Templates">Audio Templates</a>
          </li>
          <li>
            <a href="" ng-click="navigateTo('#status-of-voice-message')" class="toc-h2 toc-link" data-title="Status of callmessage">Status of callmessage</a>
          </li>
          <li>
            <a href="" ng-click="navigateTo('#create-voice-message')" class="toc-h2 toc-link" data-title="Create Callmessage">Create Callmessage</a>
          </li>
          <li>
            <a href="" ng-click="navigateTo('#get-voice-messages-list')" class="toc-h2 toc-link" data-title="Get Callmessages List">Get Callmessages List</a>
          </li>
          <li>
            <a ng-click="navigateTo('#get-single-voice-message')" href="" class="toc-h2 toc-link" data-title="Get Single Callmessage">Get Single Callmessage</a>
          </li>
          <li>
            <a ng-click="navigateTo('#delete-single-voice-message')" href="" class="toc-h2 toc-link" data-title="Delete Single Callmessage">Delete Single Callmessage</a>
          </li>
        </ul>
      </li>
      <li>
        <a ng-click="navigateTo('#click-to-call')" href="" class="toc-h1 toc-link" data-title="Click To Call">Click To Call</a>
        <ul class="toc-list-h2 hidden" ng-class="{'show': ctcSection}">
          <li>
            <a ng-click="navigateTo('#get-snippets-list')" href="" class="toc-h2 toc-link" data-title="Get Snippets List">Get Snippets List</a>
          </li>
          <li>
            <a ng-click="navigateTo('#make-a-call-through-snippet')" href="" class="toc-h2 toc-link" data-title="Make a Call Through Snippet">Make a Call Through Snippet</a>
          </li>
        </ul>
      </li>
      <li>
        <a ng-click="navigateTo('#errors')" href="" class="toc-h1 toc-link" data-title="Errors">Errors</a>
      </li>
    </div>
    <ul class="toc-footer">
      <li><a href='https://callburn.com/contact-us'>Need support? Contact with us!</a></li>
      <li><a href='https://callburn.com'>Go to Callburn.com</a></li>
    </ul>
  </div>
  <div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
      <h1 id='introduction'>Introduction</h1>
      <p>Callburn API is designed for making callmessages directly from your website, by connecting to our flexible REST API . For being able to access to our API, you need to send your api key with each request . For obtaining API key go to API section and create a new key . For making development smoothly, we are also giving test API key . It will behave exactly like the live one, just will simulate statuses instead of making real calls and will be free .</p>
      <p>Our API endpoint is <code>https://api.callburn.com/v1/</code></p>
      <h2 id='authentication'>Authentication</h2>
      <blockquote>
        <p>Request header example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>-H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
      </code></pre>
      <p>Authenticate your account when using the API by including your <API_KEY> in the request.
        You can create your API access key in <a target="_blank" href='https://callburn.com/myaccount#/api/settings'>API Settings</a>
      also giving permissions to work with exact services in Callburn.</p>
      <p>Authentication to the API is performed via <a target="_blank" href='https://en.wikipedia.org/wiki/Basic_access_authentication'>HTTP Basic Auth</a>. Provide your API key as the basic auth username value. You do not need to provide a password.
      If you need to authenticate via bearer auth.</p>
      <aside class="notice">
        You should replace <code>ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb</code> with your own <API_KEY>
      </aside>
      <h2 id='links'>Links</h2>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="err">...</span><span class="w">
      </span><span class="s2">"links"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
      </span><span class="s2">"first"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/click-to-call/snippets?page=1"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/click-to-call/snippets?page=3"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"prev"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"next"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/click-to-call/snippets?page=2"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span><span class="err">...</span><span class="w">
      </span></code></pre>
      <p>The links object is returned as part of the response body when pagination is enabled.</p>

      <p>By default, 7 objects are returned per page. Even if the response contains 7 objects or fewer, links object will be returned with <code>null</code> value for <code>next</code> and <code>prev</code>.</p>

      <p>You can request a different pagination limit or force pagination by appending <code>?per_page=</code> to the request with the number of items you would like per page. For instance, to show only two results per page, you could add <code>?per_page=10</code> to the end of your query. The maximum number of results per page is 25.</p>

      <p>The values of these are the URLs of the associated pages. The keys will be one of the following:</p>

      <ul>
        <li><code>first</code>: The URI of the first page of results.</li>
        <li><code>prev</code>: The URI of the previous sequential page of results.</li>
        <li><code>next</code>: The URI of the next sequential page of results.</li>
        <li><code>last</code>: The URI of the last page of results.</li>
      </ul>
      <h2 id='meta'>Meta</h2>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="err">...</span><span class="w">
      </span><span class="s2">"meta"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
      </span><span class="s2">"path"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/click-to-call/snippets"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"current_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">3</span><span class="p">,</span><span class="w">
      </span><span class="s2">"from"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"to"</span><span class="p">:</span><span class="w"> </span><span class="mi">7</span><span class="p">,</span><span class="w">
      </span><span class="s2">"per_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">7</span><span class="p">,</span><span class="w">
      </span><span class="s2">"total"</span><span class="p">:</span><span class="w"> </span><span class="mi">18</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span><span class="err">...</span><span class="w">
      </span></code></pre>
      <p>In addition to the main resource root, the response may also contain a meta object. This object contains information about the response itself.</p>

      <p>The meta object contains a <code>total</code> key that is set to the total number of objects returned by the request. This has implications on the <a href="#links"><code>links</code></a> object and pagination.</p>

      <p>Currently, the meta object will have a value when a request is made on a collection (like callmessages or click to call snippets).</p>
      <h1 id='voice-messages'>Callmessages</h1>
      <p>This section is giving ability to control your existing callmessages which you already created in website or through API and you are able to create and delete callmessages through simple API query.</p>

      <p>More info about callmessages you can see in our <a href="https://callburn.com/voice-message">tutorial</a></p>
      <h2 id='tts-languages'>TTS Languages</h2>
      <blockquote>
        <p>Request example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>    curl <span class="s2">"https://api.callburn.com/v1/text-to-speach-languages"</span>
        -H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
      </code></pre>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="p">[</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Arabic"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Laila"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Arabic"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Maged"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"language"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Arabic"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"code"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Tarik"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="err">...</span><span class="w">
      </span><span class="p">]</span><span class="w">
      </span></code></pre>
      <p>This endpoint retrieves all possible Languages to generate audio from text.</p>
      <h3 id='response-parameters'>Response Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>language</code></td>
          <td><code>string</code></td>
          <td>Language of voice generation.</td>
        </tr>
        <tr>
          <td><code>code</code></td>
          <td><code>string</code></td>
          <td>Unique identifier which should be sent when want to generate new audio template.</td>
        </tr>
      </tbody></table>
      <h2 id='audio-templates'>Audio Templates</h2>
      <p>Templates can be created in <a target="_blank" href="https://callburn.com/myaccount#/campaign/templates">Audio Templates</a> section as blueprint for messages you’ll send more often.</p>

      <blockquote>
        <p>Request example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>    curl <span class="s2">"https://api.callburn.com/v1/audio-templates?per_page=2"</span>
        -H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
      </code></pre>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="p">{</span><span class="w">
      </span><span class="s2">"data"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"f718499c1c8cef6730f9fd03c8125cab2569fb809d740"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"file"</span><span class="p">:</span><span class="w"> </span><span class="s2">"filename.mp3"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"tts_text"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"uploaded"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"59b90e1005a220e2ebc542eb9d950b1e514abc9161c25"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"file"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"tts_text"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Hi there, we have already opened our new shop in the following address"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"type"</span><span class="p">:</span><span class="w"> </span><span class="s2">"tts"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span><span class="p">],</span><span class="w">
      </span><span class="s2">"links"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
      </span><span class="s2">"first"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/audio-templates?per_page=2&amp;page=1"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/audio-templates?per_page=2&amp;page=2"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"prev"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"next"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/audio-templates?per_page=2&amp;page=2"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="s2">"meta"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
      </span><span class="s2">"current_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"from"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
      </span><span class="s2">"path"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/audio-templates"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"per_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
      </span><span class="s2">"to"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
      </span><span class="s2">"total"</span><span class="p">:</span><span class="w"> </span><span class="mi">3</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span></code></pre><h3 id='get-audio-templates-list'>Get Audio Templates List</h3>
      <p>This endpoint retrieves paginated existing <a target="_blank" href="https://callburn.com/myaccount#/campaign/templates">Audio Templates</a>. You are able to set your own pagination params.</p>
      <h3 id='https-request'>HTTPS Request</h3>
      <p><code>GET https://api.callburn.com/v1/audio-templates</code></p>
      <h3 id='request-parameters'>Request Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Required</th>
          <th>Default</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>page</code></td>
          <td>No</td>
          <td>1</td>
          <td>Requested page number in pagination.</td>
        </tr>
        <tr>
          <td><code>per_page</code></td>
          <td>No</td>
          <td>7</td>
          <td>Limit of items in request (max: 25).</td>
        </tr>
      </tbody></table>
      <h3 id='response-parameters-2'>Response Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>token</code></td>
          <td><code>string</code></td>
          <td>The unique identifier for the snippet.</td>
        </tr>
        <tr>
          <td><code>file</code></td>
          <td><code>string</code></td>
          <td>File name which was uploaded. If file converted from <code>tts_text</code> this value will be <code>null</code>.</td>
        </tr>
        <tr>
          <td><code>tts_text</code></td>
          <td><code>string</code></td>
          <td>Text which was converted to voice file. If audio template was created by uploading file this value will be <code>null</code></td>
        </tr>
        <tr>
          <td><code>tts_code</code></td>
          <td><code>string</code></td>
          <td>TTS code which was used to convert voice file. If audio template was created by uploading file this value will be <code>null</code></td>
        </tr>
        <tr>
          <td><code>type</code></td>
          <td><code>string</code></td>
          <td>Should show type of audio template. Could be one of that values <code>uploaded</code> or <code>tts</code>.</td>
        </tr>
      </tbody></table>
      <h2 id='status-of-voice-message'>Status of callmessage</h2>
      <p>Here is all possible statuses of callmessage item.</p>

      <table><thead>
        <tr>
          <th>Status</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>calling_in_progress</code></td>
          <td>Means that calling in progress.</td>
        </tr>
        <tr>
          <td><code>waiting_for_actions</code></td>
          <td>Means that callmessage stopped or called but not to all recipients.</td>
        </tr>
        <tr>
          <td><code>sent</code></td>
          <td>Means that callmessage fully sent.</td>
        </tr>
        <tr>
          <td><code>manually_stopped</code></td>
          <td>Means that callmessage manually stopped.</td>
        </tr>
        <tr>
          <td><code>scheduled</code></td>
          <td>Means that callmessage scheduled.</td>
        </tr>
        <tr>
          <td><code>saved_as_draft</code></td>
          <td>Means that callmessage saved as draft.</td>
        </tr>
      </tbody></table>
      <h2 id='create-voice-message'>Create Callmessage</h2>
      <p>This endpoint create new callmessage.</p>

      <p>You can create callmessage using existing audio template by sending <code>audio_template_token</code> which you can get <a href="#audio-templates">here</a>. Also you can generate new audio template during creating callmessage by sending <code>audio_text</code> and <code>tts_code</code>. All <code>tts_codes</code> you can see <a href="#tts-languages">here</a>.</p>

      <blockquote>
        <p>Request example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>    curl <span class="s2">"https://api.callburn.com/v1/voice-messages"</span>
        -H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
        -H <span class="s2">"Content-Type: application/json"</span>
        -d <span class="s1">'{
          "name": "My first Callmessage"
          "audio_template_token": "59b90e1005a220e2ebc542eb9d950b1e514abc9161c25",
          "recipients": [
          "+3469*******",
          "+37496******",
          ...
          ],
          "caller_phone_number": "+37491******"
        }'</span>
        -X POST
      </code></pre>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"6b180037abbebea991d8b1232f8a8ca91013e68ad9633b"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"My first Callmessage"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"status"</span><span class="p">:</span><span class="w"> </span><span class="s2">"calling_in_progress"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span></code></pre><h3 id='https-request-2'>HTTPS Request</h3>
      <p><code>POST https://api.callburn.com/v1/voice-messages</code></p>
      <h3 id='request-parameters-2'>Request Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Required</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>name</code></td>
          <td>No</td>
          <td><code>string</code></td>
          <td>The human-readable name for the callmessage.</td>
        </tr>
        <tr>
          <td><code>audio_template_token</code></td>
          <td>No</td>
          <td><code>string</code></td>
          <td>The unique identifier for the <a href="#audio-templates">audio_template</a>.</td>
        </tr>
        <tr>
          <td><code>recipients</code></td>
          <td>Yes</td>
          <td><code>array</code></td>
          <td>The phone numbers which must be called, also phone number must be contain country code.</td>
        </tr>
        <tr>
          <td><code>caller_phone_number</code></td>
          <td>Yes</td>
          <td><code>string</code></td>
          <td>The phone number from which calls will be made. It should be registered in your account <a target="_blank" href="https://callburn.com/myaccount#/account/settings">settings</a> as caller ID.</td>
        </tr>
        <tr>
          <td><code>audio_text</code></td>
          <td>Yes if is not present <code>audio_template_token</code></td>
          <td><code>string</code></td>
          <td>String which will become to <a href="#audio-templates">audio template</a>.</td>
        </tr>
        <tr>
          <td><code>tts_code</code></td>
          <td>Yes if is not present <code>audio_template_token</code></td>
          <td><code>string</code></td>
          <td>This key gives you ability to select voice author, also can see <a href="#tts-languages">all codes</a>.</td>
        </tr>
      </tbody></table>
      <h3 id='response-parameters-3'>Response Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>token</code></td>
          <td><code>string</code></td>
          <td>The unique identifier for the callmessage.</td>
        </tr>
        <tr>
          <td><code>name</code></td>
          <td><code>string</code></td>
          <td>A human-readable name for the callmessage.</td>
        </tr>
        <tr>
          <td><code>status</code></td>
          <td><code>string</code></td>
          <td>Status of callmessages. Possible statuses <a href="#satus-of-voice-message">here</a>.</td>
        </tr>
      </tbody></table>
      <h2 id='get-voice-messages-list'>Get Callmessages List</h2>
      <blockquote>
        <p>Request example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>    curl <span class="s2">"https://api.callburn.com/v1/voice-messages?per_page=2"</span>
        -H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
      </code></pre>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="p">{</span><span class="w">
      </span><span class="s2">"data"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"46444d94f081e3549803b92928260f56100633cc97373c"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Schedulation in Progress"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"status"</span><span class="p">:</span><span class="w"> </span><span class="s2">"calling_in_progress"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"de51cf91e1e03e51657da1b8c37e33def0012993fb8e91"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Stopped callmessage"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"status"</span><span class="p">:</span><span class="w"> </span><span class="s2">"manually_stopped"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span><span class="p">],</span><span class="w">
      </span><span class="s2">"links"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
      </span><span class="s2">"first"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/voice-messages?per_page=2&amp;page=1"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/voice-messages?per_page=2&amp;page=4"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"prev"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"next"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/voice-messages?per_page=2&amp;page=2"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="s2">"meta"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
      </span><span class="s2">"current_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"from"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">4</span><span class="p">,</span><span class="w">
      </span><span class="s2">"path"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/voice-messages"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"per_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
      </span><span class="s2">"to"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
      </span><span class="s2">"total"</span><span class="p">:</span><span class="w"> </span><span class="mi">7</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span></code></pre>
      <p>This endpoint retrieves paginated <a target="_blank" href="https://callburn.com/myaccount#/campaign/overview/">callmessages</a>. You are able to set your own pagination params.</p>
      <h3 id='https-request-3'>HTTPS Request</h3>
      <p><code>GET https://api.callburn.com/v1/voice-messages</code></p>
      <h3 id='request-parameters-3'>Request Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Required</th>
          <th>Default</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>page</code></td>
          <td>No</td>
          <td>1</td>
          <td>Requested page number in pagination.</td>
        </tr>
        <tr>
          <td><code>per_page</code></td>
          <td>No</td>
          <td>7</td>
          <td>Limit of items in request (max: 25).</td>
        </tr>
      </tbody></table>
      <h3 id='response-parameters-4'>Response Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>token</code></td>
          <td><code>string</code></td>
          <td>The unique identifier for the callmessage.</td>
        </tr>
        <tr>
          <td><code>name</code></td>
          <td><code>string</code></td>
          <td>A human-readable name for the callmessage.</td>
        </tr>
        <tr>
          <td><code>status</code></td>
          <td><code>string</code></td>
          <td>Status of callmessages. Possible statuses <a href="#satus-of-voice-message">here</a>.</td>
        </tr>
      </tbody></table>
      <h2 id='get-single-voice-message'>Get Single Callmessage</h2>
      <blockquote>
        <p>Request example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>    curl <span class="s2">"https://api.callburn.com/v1/voice-messages/46444d94f081e3549803b92928260f56100633cc97373c"</span>
        -H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
      </code></pre>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"46444d94f081e3549803b92928260f56100633cc97373c"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Schedulation in Progress"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"status"</span><span class="p">:</span><span class="w"> </span><span class="s2">"calling_in_progress"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span></code></pre>
      <p>This endpoint retrieves single object from <a target="_blank" href="https://callburn.com/myaccount#/campaign/overview/">callmessages</a> list.</p>
      <h3 id='https-request-4'>HTTPS Request</h3>
      <p><code>GET https://api.callburn.com/v1/voice-messages/&lt;TOKEN&gt;</code></p>
      <h3 id='response-parameters-5'>Response Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>token</code></td>
          <td><code>string</code></td>
          <td>The unique identifier for the callmessage.</td>
        </tr>
        <tr>
          <td><code>name</code></td>
          <td><code>string</code></td>
          <td>A human-readable name for the callmessage.</td>
        </tr>
        <tr>
          <td><code>status</code></td>
          <td><code>string</code></td>
          <td>Status of callmessages. Possible statuses <a href="#satus-of-voice-message">here</a>.</td>
        </tr>
      </tbody></table>
      <h2 id='delete-single-voice-message'>Delete Single Callmessage</h2>
      <blockquote>
        <p>Request example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>    curl <span class="s2">"https://api.callburn.com/v1/voice-messages/46444d94f081e3549803b92928260f56100633cc97373c"</span>
        -H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
        -X DELETE
      </code></pre>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"46444d94f081e3549803b92928260f56100633cc97373c"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Schedulation in Progress"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"status"</span><span class="p">:</span><span class="w"> </span><span class="s2">"calling_in_progress"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span></code></pre>
      <p>This endpoint retrieves single object from <a target="_blank" href="https://callburn.com/myaccount#/campaign/overview/">callmessages</a> list which already deleted.</p>
      <h3 id='https-request-5'>HTTPS Request</h3>
      <p><code>DELETE https://api.callburn.com/v1/voice-messages/&lt;TOKEN&gt;</code></p>
      <h3 id='response-parameters-6'>Response Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>token</code></td>
          <td><code>string</code></td>
          <td>The unique identifier for the callmessage.</td>
        </tr>
        <tr>
          <td><code>name</code></td>
          <td><code>string</code></td>
          <td>A human-readable name for the callmessage.</td>
        </tr>
        <tr>
          <td><code>status</code></td>
          <td><code>string</code></td>
          <td>Status of callmessages. Possible statuses <a href="#satus-of-voice-message">here</a>.</td>
        </tr>
      </tbody></table>
      <h1 id='click-to-call'>Click To Call</h1>
      <p>This section is giving ability to control your existing snippets which you already created in website and you are able to make call through simple API query.</p>

      <p>More info about click to call you can see in our <a target="_blank" href="https://callburn.com/click-to-call">tutorial</a></p>
      <h2 id='get-snippets-list'>Get Snippets List</h2>
      <blockquote>
        <p>Request example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>    curl <span class="s2">"https://api.callburn.com/v1/click-to-call/snippets?per_page=2"</span>
        -H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
      </code></pre>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="s2">"data"</span><span class="p">:</span><span class="w"> </span><span class="p">[</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"1UQyEoxj5yHzBbjGadH7MDWaFiQRX6CLBTvb4LkJ"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"First Snippet Name"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="p">{</span><span class="w">
      </span><span class="s2">"token"</span><span class="p">:</span><span class="w"> </span><span class="s2">"7VjSeSgUiDdIVFtee9i2tjYcl585e1h5TbKMGPoB"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"name"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Other Snippet Name"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span><span class="p">],</span><span class="w">
      </span><span class="s2">"links"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
      </span><span class="s2">"first"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/click-to-call/snippets?page=1"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/click-to-call/snippets?page=3"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"prev"</span><span class="p">:</span><span class="w"> </span><span class="kc">null</span><span class="p">,</span><span class="w">
      </span><span class="s2">"next"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/click-to-call/snippets?page=2"</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="s2">"meta"</span><span class="p">:</span><span class="w"> </span><span class="p">{</span><span class="w">
      </span><span class="s2">"current_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"from"</span><span class="p">:</span><span class="w"> </span><span class="mi">1</span><span class="p">,</span><span class="w">
      </span><span class="s2">"last_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">3</span><span class="p">,</span><span class="w">
      </span><span class="s2">"path"</span><span class="p">:</span><span class="w"> </span><span class="s2">"https://api.callburn.com/v1/click-to-call/snippets"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"per_page"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
      </span><span class="s2">"to"</span><span class="p">:</span><span class="w"> </span><span class="mi">2</span><span class="p">,</span><span class="w">
      </span><span class="s2">"total"</span><span class="p">:</span><span class="w"> </span><span class="mi">5</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span></code></pre>
      <p>This endpoint retrieves paginated existing <a target="_blank" href="https://callburn.com/myaccount#/snippet/overview/">snippets list</a>. You are able to set your own pagination params.</p>
      <h3 id='https-request'>HTTPS Request</h3>
      <p><code>GET https://api.callburn.com/v1/click-to-call/snippets</code></p>
      <h3 id='request-parameters'>Request Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Required</th>
          <th>Default</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>page</code></td>
          <td>No</td>
          <td>1</td>
          <td>Requested page number in pagination.</td>
        </tr>
        <tr>
          <td><code>per_page</code></td>
          <td>No</td>
          <td>7</td>
          <td>Limit of items in request (max: 25).</td>
        </tr>
      </tbody></table>
      <h3 id='response-parameters'>Response Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>token</code></td>
          <td>string</td>
          <td>The unique identifier for the snippet.</td>
        </tr>
        <tr>
          <td><code>name</code></td>
          <td>string</td>
          <td>A human-readable name for the snippet.</td>
        </tr>
      </tbody></table>
      <h2 id='make-a-call-through-snippet'>Make a Call Through Snippet</h2>
      <blockquote>
        <p>Request example:</p>
      </blockquote>
      <pre class="highlight shell tab-shell"><code>    curl <span class="s2">"https://api.callburn.com/v1/click-to-call/snippets-call"</span>
        -H <span class="s2">"Authorization: Bearer ZJ0EtMdds3xYplHVO5OAg8RyYRMG5m9tYoMhjEVb"</span>
        -H <span class="s2">"Content-Type: application/json"</span>
        -d <span class="s1">'{
          "snippet_token": "59b90e1005...c25",
          "phone_number": "+3469*******",
          "date": "2018-11-30 17:53:00",
          "timezone": "Europe/Rome",
        }'</span>
        -X POST
      </code></pre>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="p">{</span><span class="w">
      </span><span class="s2">"code"</span><span class="p">:</span><span class="w"> </span><span class="mi">200</span><span class="p">,</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Your call will be made at 2018-11-30 17:53:00"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span></code></pre>
      <p>You are able to make a call using this URL. Call could be triggered as well as both immediate and scheduled. For scheduled calls you need to sent scheduled call <code>date</code> and <code>timezone</code> of your requested <code>date</code>.</p>
      <h3 id='https-request-2'>HTTPS Request</h3>
      <p><code>POST https://api.callburn.com/v1/click-to-call/snippets-call</code></p>
      <h3 id='request-parameters-2'>Request Parameters</h3>
      <table><thead>
        <tr>
          <th>Parameter</th>
          <th>Required</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead><tbody>
        <tr>
          <td><code>snippet_token</code></td>
          <td>Yes</td>
          <td><code>string</code></td>
          <td>The unique identifier for the snippet. You can get it in <a href="#get-snippets-list">snippets list</a></td>
        </tr>
        <tr>
          <td><code>phone_number</code></td>
          <td>Yes</td>
          <td><code>string</code></td>
          <td>The phone number which must be called, also phone number must be contain country code.</td>
        </tr>
        <tr>
          <td><code>date</code></td>
          <td>No</td>
          <td><code>Y-m-d H:i:s</code></td>
          <td>Time when you want to have a call.</td>
        </tr>
        <tr>
          <td><code>timezone</code></td>
          <td>Only when <code>date</code> requested</td>
          <td><code>string</code></td>
          <td>Sent timezone in which is your sent date. In PHP you can see all list of possible timezones using this function <code>timezone_identifiers_list()</code>.</td>
        </tr>
      </tbody></table>
      <h1 id='errors'>Errors</h1>
      <blockquote>
        <p>Response example:</p>
      </blockquote>
      <pre class="highlight json tab-json"><code><span class="w">    </span><span class="p">{</span><span class="w">
      </span><span class="s2">"code"</span><span class="p">:</span><span class="w"> </span><span class="mi">400</span><span class="p">,</span><span class="w">
      </span><span class="s2">"message"</span><span class="p">:</span><span class="w"> </span><span class="s2">"Out of available date ranges for requested snippet"</span><span class="w">
      </span><span class="p">}</span><span class="w">
      </span></code></pre>
      <p>The Callburn API uses the following error codes:</p>

      <table><thead>
        <tr>
          <th>Error Code</th>
          <th>Meaning</th>
        </tr>
      </thead><tbody>
        <tr>
          <td>400</td>
          <td>Bad Request -- Validation error.</td>
        </tr>
        <tr>
          <td>401</td>
          <td>Unauthorized -- Unauthorized request - set <API_KEY> in header.</td>
        </tr>
        <tr>
          <td>403</td>
          <td>Forbidden -- The requested resource is hidden or not allowed.</td>
        </tr>
        <tr>
          <td>404</td>
          <td>Not Found -- The specified resource could not be found.</td>
        </tr>
        <tr>
          <td>405</td>
          <td>Method Not Allowed -- You tried to access a resource with an invalid method.</td>
        </tr>
        <tr>
          <td>429</td>
          <td>Too Many Requests -- You&#39;re requesting too many resource! Slow down!</td>
        </tr>
        <tr>
          <td>500</td>
          <td>Internal Server Error -- We had a problem with our server. Try again later.</td>
        </tr>
      </tbody></table>

    </div>
    <div class="dark-box">
      <div class="lang-selector">
        <a href="#" data-language-name="shell">shell</a>
      </div>
    </div>
  </div>
  <!-- <script src="{{asset('laravel_assets/developers/javascripts/all.js')}}"></script> -->
</body>
</html>
