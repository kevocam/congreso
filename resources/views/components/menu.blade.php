<style>
.MenuMain{
    max-width:350px;
}
.MenuMain ul{
    display: flex;
    list-style: none;
    justify-content: space-around
}
.MenuMain__lista--item {
    text-align: center;
}
.MenuMain__lista--item:hover{
    transform: translateY(-10px);
    transition-duration: 0.4s;
}

</style>

<div class="MenuMain">
    <ul class="MenuMain__lista">        
        <li class="MenuMain__lista--item"> 
            <p>
                a
            </p>

            <a href="/lobby">            
            Lobby
            </a>
             </li>
        <li class="MenuMain__lista--item">
             <p>
                a
            </p>
            <a href="/salas">
                Salas
            </a>
            </li>
        <li class="MenuMain__lista--item">
             
            <a href="/pabellon">
                <p>
                a
            </p>
                Pabellon
            </a>
            </li>
    </ul>
    {{$slot}}
</div>
