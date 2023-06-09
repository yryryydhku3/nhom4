




Route::group(['prefix'=>'user'], function(){
    Route::get('/login',[LoginController::class, 'getlogin']);
    Route::post('/login',[LoginController::class, 'postLogin']);
    Route::get('/register',[LoginController::class, 'getRegister']);
    Route::post('/register',[LoginController::class, 'postRegister']);
});

Route::group(['prefix'=>'user'], function(){
    Route::get('/',[UserController::class,'getAllUser'])->name('listUser');
});


Route::group(['prefix' =>'user'], function(){
    Route::get('login',[LoginController::class,'login']);
    Route::get('register',[LoginController::class,'register']);

});




class UserController extends Controller
{
    public function show()
    {
        return view('auth.register'); //return register page
    }
    public function showLogin()
    {
        return view('auth.login'); //return login page
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $remember = $request->remember;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if (Auth::user()->role == 2) {
                return view('home');
            } else {
                return view('admin');
            }
        }
    }
    public function store(Request $request)
    {

        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:100',
                'name' => 'required|min:6|max:1000',
                'password' => 'required|confirmed|max:16|min:6',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $newUser = new User();
                $newUser->email = $request->email;
                $newUser->password = $request->password;
                $newUser->name = $request->name;
                $newUser->save();
                return redirect()->route('welcome.login')->with('message', 'Create success!');
            } else {
                return redirect()->route('welcome.login')->with('message', 'Create failed!');
            }
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('welcome.login');
    }
}