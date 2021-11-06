<div>
    <i class="fas fa-shopping-cart"></i>
    {{\Cart::session(auth()->id())->getContent()->count()}}
</div>
