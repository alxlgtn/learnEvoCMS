<p>{{ $data['pagetitle'] }}</p>
<p>@evoParser($documentObject['tv--child-title'])</p>
<p>{!! $modx->runSnippet('DocInfo', ['docid'=>'8', 'field'=>'tv--child-title'], '0')  !!}</p>
