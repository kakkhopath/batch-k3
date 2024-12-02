<ul class="nav nav-pills">
    <li class="nav-item"><a href="{{URL::to('/')}}" class="nav-link {{$url=='/'?'active':''}}" aria-current="page">Home</a></li>
    <li class="nav-item"><a href="{{URL::to('/about-us')}}" class="nav-link {{$url=='about-us'?'active':''}}">About Us</a></li>
    <li class="nav-item"><a href="{{URL::to('/services/pos-product')}}" class="nav-link {{$url=='services'?'active':''}}">Services</a></li>
</ul>