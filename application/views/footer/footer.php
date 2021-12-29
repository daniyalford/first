<footer>
	<section class="py-5">
		<p>footer test text</p>
		<!--		<div class="container py-5">-->
		<!--			<div class="mb-4"></div>-->
		<!--			<div class="row text-center">-->
		<!--				<div class="col-md-4">-->
		<!--					<i class="fa fa-phone fa-4x text-voilet mb-4"></i>-->
		<!--					<h5><b>Create Account</b></h5>-->
		<!--					<p>Nemo ipsam egestas volute fugit dolores quaerat sodales</p>-->
		<!--				</div>-->
		<!--				<div class="col-md-4">-->
		<!--					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"-->
		<!--						 class="bi bi-bell" viewBox="0 0 16 16">-->
		<!--						<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>-->
		<!--					</svg>-->
		<!--					<h5><b>Configure Profile</b></h5>-->
		<!--					<p>Nemo ipsam egestas volute fugit dolores quaerat sodales</p>-->
		<!--				</div>-->
		<!--				<div class="col-md-4">-->
		<!--					<i class="fa fa-clone fa-4x text-voilet mb-4"></i>-->
		<!--					<h5><b>Sort Your Files</b></h5>-->
		<!--					<p>Nemo ipsam egestas volute fugit dolores quaerat sodales</p>-->
		<!--				</div>-->
		<!---->
		<!--			</div>-->
		<!--		</div>-->
	</section>
</footer>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
		integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
		crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
		crossorigin="anonymous"></script>
<script>
	$(document).ready(function () {
		// $('.searchBoxResult').hide();
		$('#id').click(function () {
			$(this).hide();
			$('#idc').show();
			$('#ix').show();
			$('.s1').hide();
			$('.content').removeClass('s4');
			$('.content').addClass('s8');
		})
		$("#close").click(function () {
			$('#ix').hide();
			$('#id').show();
			$('#idc').hide();
			$('.s1').show();
			$('.content').removeClass('s8');
			$('.content').addClass('s4');
		})
		$("#idc").click(function () {
			$("#idc").hide();
			$('#ix').hide();
			$('#id').show();
			$('.s1').show();
			$('.content').removeClass('s8');
			$('.content').addClass('s4');
		})
		$('#phone').click(function () {
			$('#phone').hide();
			$('.menuRight').hide();
			$('#phoned').show();
			$('.chat').show();
		})
		$('#phoned').click(function () {
			$('#phoned').hide();
			$('.menuRight').show();
			$('#phone').show();
			$('.chat').hide();
		})
		$('#search').keyup(function (event) {
			let searchKey = $(this).val();
			$.ajax({
				method: 'post',
				url: window.location.origin + '/work/profile/result',
				data: {searchKey: searchKey},
				success: function (values) {
					$('.searchBoxResult').html(values);
					$('.searchBoxResult').removeClass('d-none');
					alert(values)
				}
			})
			// change color text with search
			let src_str = $(".content").html();
			searchKey = searchKey.replace(/(\s+)/, "(<[^>]+>)*$1(<[^>]+>)*");
			let pattern = new RegExp("(" + searchKey + ")", "gi");
			src_str = src_str.replace(pattern, "<span style='color: red'>$1</span>");
			$(".content").html(src_str);
		})
	})
</script>
