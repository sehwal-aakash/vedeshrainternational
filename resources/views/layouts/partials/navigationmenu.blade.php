<ul>
    <li>
        <a href="/services/" class="{{ Request::path() === 'services' ? 'active' : '' }}">Services</a>
    </li>
    <li>
        <a href="/industries/" class="{{ Request::path() === 'industries' ? 'active' : '' }}">Industries</a>
    </li>
    <li>
        <a href="/about-us/" class="{{ Request::path() === 'about-us' ? 'active' : '' }}">About</a>
    </li>
    <li>
        <a href="" class="{{ Request::path() === 'blogs' ? 'active' : '' }}">Blogs</a>
    </li>
    <li>
        <a href="/contact/" class="{{ Request::path() === 'contact' ? 'active' : '' }}">Contact</a>
    </li>
</ul>
