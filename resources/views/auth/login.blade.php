<x-auth-layout>
    {{---------------------
        $slot
    --------------------}}
    @if(session('status'))
        <p style="color:red">{{session("status")}}</p>
    @endif
        <form action="{{ route('login') }}" method="post" autocomplete="off">
            @csrf
            <label for="email">Email</label><br>
            <input class="fill_data" type="email" name="email" id="email" required><br><br>

            <label for="password">Password</label><br>
            <input class="fill_data" type="password" name="password" id="password" required><br><br>

            <input type="checkbox" id="rem" name="remember">
            <label for="rem">Remember me</label><br><br>

            <div>
                <div class="">
                    <a href="{{ route('register') }}">Create an account</a>
                    <br>
                    <input type="submit" value="LOG IN" style="background-color: #db50bf; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="btn" href="{{ url('auth/facebook') }}"
                   style="background-color: #3B5499; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                    Login with Facebook
                </a>
            </div>


        </form>
    {{---------------------
        $slot
    --------------------}}
</x-auth-layout>
