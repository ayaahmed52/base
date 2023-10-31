@include('admin.layout.partial.header')
@include('admin.layout.partial.navbar')
@include('admin.layout.partial.sidebar') 

<main id="main" class="main">

<div class="pagetitle">
  <h1>Accordion</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Components</li>
      <li class="breadcrumb-item active">Accordion</li>
    </ol>
    @yield('breadcrumb')
  </nav>
</div><!-- End Page Title -->

    <section class="section">
        @yield('content')
    </section>

</main><!-- End #main -->
@include('admin.layout.partial.footer')