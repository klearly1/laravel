  

  <!-- Main container --> 
  <div class="container my-5"> 
    <div class="row"> 
        <div class="w-100 text-left py-3">
            <?
                foreach($topics as $topic) {
            ?>
            <a class="btn btn-outline-secondary py-1"><?=$topic?></a>
            <?
                }
            ?>
        </div>

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
        <?
        // 게시물 데이터 배열 (임시 데이터) 
        $posts = array( 
          array( 
            'id' => 1, 
            'title' => '포럼 게시물 제목 1', 
            'author' => '작성자 1', 
            'date' => '2021년 1월 1일', 
            'summary' => '포럼 게시물 요약 1', 
          ), 
          array( 
            'id' => 2, 
            'title' => '포럼 게시물 제목 2', 
            'author' => '작성자 2', 
            'date' => '2021년 1월 2일', 
            'summary' => '포럼 게시물 요약 2', 
         ), 
        ); 
        ?>
          <!-- Create post button -->
        <div class="fixed-bottom mr-3 mb-3">
        <a href="#" class="btn btn-primary btn-lg">글 작성</a>
        </div>
 
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody> 
        <?foreach ($posts as $post) { ?> 
            <tr>
              <td><?=$post['id']; ?></td>
              <td><?=$post['title']; ?></td>
              <td><?=$post['author']; ?></td>
              <td><?=$post['date']; ?></td>
              <td><?=$post['summary']; ?></td>
            </tr>
        <?} ?> 
          </tbody>
        </table>
      </div>
       <!-- Create post button -->
        <div class="position-relative mb-3 float-right">
            <a href="#" class="btn btn-primary btn-lg">글 작성</a>
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