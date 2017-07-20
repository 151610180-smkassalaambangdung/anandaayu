Public Fuction hendle($request, Closer $next,$guard=null)
{
	if(auth::guard($guard->check()){
	return redirect('/home');
	}
	retrun $next($request);
}