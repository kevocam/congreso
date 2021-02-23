<style>
.MenuMain{
    max-width:350px;
    padding:20px;
    
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
    cursor: pointer;
    transform: translateY(-15px);
    transition-duration: 0.4s;
}

</style>

<div class="MenuMain">
    <ul class="MenuMain__lista">        
        <li class="MenuMain__lista--item"> 
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00bfd8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                  </svg>
            </p>

            <a href="/lobby">            
            Lobby
            </a>
             </li>
        <li class="MenuMain__lista--item">
             <p>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hierarchy-2" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00bfd8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 3h4v4h-4z" />
                    <path d="M3 17h4v4h-4z" />
                    <path d="M17 17h4v4h-4z" />
                    <path d="M7 17l5 -4l5 4" />
                    <line x1="12" y1="7" x2="12" y2="13" />
                  </svg>
            </p>
            <a href="/salas">
                Salas
            </a>
            </li>
        <li class="MenuMain__lista--item">
             
            <a href="/pabellon">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00bfd8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                        <line x1="3.6" y1="9" x2="20.4" y2="9" />
                        <line x1="3.6" y1="15" x2="20.4" y2="15" />
                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                      </svg>
            </p>
                Pabellon
            </a>
            </li>
    </ul>
    {{$slot}}
</div>
