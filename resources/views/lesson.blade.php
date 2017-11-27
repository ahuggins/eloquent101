@extends('layouts.site')

@section('content')
@markdown

## Eloquent Code

```
{!! $code !!}
```

## Returned Data
{{ dump($data) }}
@endmarkdown
@stop

@section('scripts')
<script type="text/javascript">
(function() {
    'use strict';
var compacted = document.querySelectorAll('.sf-dump-compact');

for (var i = 0; i < compacted.length; i++) {
  compacted[i].className = 'sf-dump-expanded';
}

})();
</script>
@stop
