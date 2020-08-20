@if(session()->has("success_msg"))
<P class="alert alert-info">{{session()->get('success_msg')}}</P>
@endif

@if(session()->has("errormsg"))
<P class="alert alert-danger">{{session()->get('errormsg')}}</P>
@endif