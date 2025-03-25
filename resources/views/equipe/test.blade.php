@extends('layout.base')

@section('content')
<div class="card">
    <a href="{{route('equipe.equipe.index')}}" class="btn btn-primary">Liste un equipe</a>
    <div class="card-body">
        <h5 class="card-title mb-1 anchor" id="striped">Striped Rows Table <a class="anchor-link" href="#striped">#</a></h5>
        <p class="text-muted font-14">
            Use <code>.table-striped</code> to add zebra-striping to any table row
            within the <code>&lt;tbody&gt;</code>.
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-centered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry the Bird</td>
                        <td> Simsons</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="highlight">
            <div class="highlight-toolbar">
                <small class="text-uppercase">html</small>
                <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
            </div>
            <div class="code" data-simplebar>
                <pre class="language-html">
                               <code>
                                    &lt;table class=&quot;table table-striped table-centered&quot;&gt;
                                         &lt;thead&gt;
                                              &lt;tr&gt;
                                                   &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                   &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                   &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                   &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                              &lt;/tr&gt;
                                         &lt;/thead&gt;
                                         &lt;tbody&gt;
                                              &lt;tr&gt;
                                                   &lt;td&gt;1&lt;/td&gt;
                                                   &lt;td&gt;Mark&lt;/td&gt;
                                                   &lt;td&gt;Otto&lt;/td&gt;
                                                   &lt;td&gt;@mdo&lt;/td&gt;
                                              &lt;/tr&gt;
                                              &lt;tr&gt;
                                                   &lt;td&gt;2&lt;/td&gt;
                                                   &lt;td&gt;Jacob&lt;/td&gt;
                                                   &lt;td&gt;Thornton&lt;/td&gt;
                                                   &lt;td&gt;@fat&lt;/td&gt;
                                              &lt;/tr&gt;
                                              &lt;tr&gt;
                                                   &lt;td&gt;3&lt;/td&gt;
                                                   &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                   &lt;td&gt; Simsons&lt;/td&gt;
                                                   &lt;td&gt;@twitter&lt;/td&gt;
                                              &lt;/tr&gt;
                                         &lt;/tbody&gt;
                                    &lt;/table&gt;
                               </code>
                          </pre>
            </div>
        </div>
    </div>

</div>
@endsection



{{--  @foreach($equipe as $equipe)
        <tr>




            <td>{{$equipe->name}}</td>

            <td class="text-end">

            </td>
        </tr>
        @endforeach --}}
