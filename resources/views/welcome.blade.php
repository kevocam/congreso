<style>
    @media (max-width: 767px) {
  .navicon {
    width: 1.125em;
    height: .125em;
  }

  .navicon::before,
  .navicon::after {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    transition: all .2s ease-out;
    content: '';
    background: #3D4852;
  }

  .navicon::before {
    top: 5px;
  }

  .navicon::after {
    top: -5px;
  }

  .menu-btn:not(:checked) ~ .menu {
    display: none;
  }

  .menu-btn:checked ~ .menu {
    display: block;
  }

  .menu-btn:checked ~ .menu-icon .navicon {
    background: transparent;
  }

  .menu-btn:checked ~ .menu-icon .navicon::before {
    transform: rotate(-45deg);
  }

  .menu-btn:checked ~ .menu-icon .navicon::after {
    transform: rotate(45deg);
  }

  .menu-btn:checked ~ .menu-icon .navicon::before,
  .menu-btn:checked ~ .menu-icon .navicon::after {
    top: 0;
  }
}

</style>

    @extends('layouts.congreso')
    @section('content')
        <div class="container-lg mx-auto">
            <x-hero>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus excepturi exercitationem incidunt possimus vitae unde laudantium, voluptas expedita numquam! Eaque sit sequi quis architecto aliquam laudantium animi vero non accusantium!
            </x-hero>
            <x-welcome>
              
            </x-welcome>

        </div>
    @endsection

