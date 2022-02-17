<x-user-layout>
    {{---------------------
        $slot
    --------------------}}
    <h1>Setting Page</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input class="logout" type="submit" value="Logout">
        <style>
            input[type=text] {
                padding:5px;
                border:2px solid #ccc;
                -webkit-border-radius: 5px;
                border-radius: 5px;
            }

            input[type=text]:focus {
                border-color:#333;
            }

            input[type=submit] {
                padding:5px 15px;
                background: #1760ce;
                border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px;
            }
        </style>
    </form>
    {{---------------------
        $slot
    --------------------}}
</x-user-layout>
