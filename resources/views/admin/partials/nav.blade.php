
<nav class="mdc-permanent-drawer">
  <div class="mdc-permanent-drawer__toolbar-spacer">Management Tools</div>
  <div class="mdc-list-group">
    <nav class="mdc-list">
      <a class="mdc-list-item {{menuActive('admin/banners')}}" href="{{ route('admin.banners.index') }}">
        <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">panorama</i>Banner
      </a>
      <a class="mdc-list-item {{menuActive('admin/products')}}" href="{{ route('admin.products.index') }}">
        <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">inbox</i>Product
      </a>
      <a class="mdc-list-item {{menuActive('admin/projects')}}" href="{{ route('admin.projects.index') }}">
        <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">account_balance_wallet</i>Project 
      </a>
      <a class="mdc-list-item {{menuActive('admin/contents')}}" href="{{ route('admin.contents.index') }}">
        <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">drafts</i>Content 
      </a>
      <a class="mdc-list-item {{menuActive('admin/clients')}}" href="{{ route('admin.clients.index') }}">
          <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">supervisor_account</i> Client
      </a>
    </nav>

    <hr class="mdc-list-divider">

    <nav class="mdc-list">
        <a class="mdc-list-item {{menuActive('admin/ratings')}}" href="{{ route('admin.ratings.index') }}">
          <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">stars</i> Testimonial
        </a>
        <a class="mdc-list-item {{menuActive('admin/faqs')}}" href="{{ route('admin.faqs.index')}}">
          <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">question_answer</i> FAQ
        </a>
        <a class="mdc-list-item {{menuActive('admin/enquiries')}}" href="{{ route('admin.enquiries.index')}}">
          <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">announcement</i> Enquiry 
        </a>
        <a class="mdc-list-item {{menuActive('admin/enquiries')}}" href="{{ url('admin/infos/index')}}">
          <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">info_outline</i> Help & Infos 
        </a>
      </nav>
    </div>
</nav>