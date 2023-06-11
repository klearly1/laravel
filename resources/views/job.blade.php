  

  <!-- Main container --> 
  <div class="container my-5"> 
    <div class="row"> 
        <div class="w-100 text-left py-3">
            <?
                if(!empty($page_name)) {
            ?>
            <h3><?=$page_name?></h3>
            <?
                } else {
            ?>
            <h3>게시판</h3>
            <?
            }
            ?>
        </div>
      <!-- Forum posts --> 
      <div class="col-md-12 p-0"> 
 
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">글번호</th>
              <th scope="col">제목</th>
              <th scope="col">작성자</th>
              <th scope="col">작성일자</th>
            </tr>
          </thead>
          <tbody> 
        <?//foreach ($posts as $post) { ?> 
            <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
        <?//} ?> 
          </tbody>
        </table>
      </div>
       <!-- Create post button -->
        <div class="position-relative mb-3 float-right">
            <a href="/board/write" class="btn btn-primary btn-lg">글 작성</a>
        </div> 
        <!-- Pagination --> 
        <nav aria-label="Page navigation example" class="w-30 mx-auto"> 
          <ul class="pagination"> 
            <li class="page-item disabled"> 
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">이전</a> 
            </li> 
            <li class="page-item active"><a class="page-link" href="#">1</a></li> 
            <li class="page-item"><a class="page-link" href="#">2</a></li> 
            <li class="page-item"><a class="page-link" href="#">3</a></li> 
            <li class="page-item"> 
              <a class="page-link" href="#">다음</a> 
            </li> 
          </ul> 
        </nav> 
      </div> 
      <!-- Create post form --> 
    </div> 
</div> 