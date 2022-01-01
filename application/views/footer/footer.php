<footer class="text-center">
	<section class="py-5">
		<p>footer test text</p>
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
		$('#id').click(function () {
			$(this).hide();
			$('#idc').show();
			$('#ix').show();
			$('.s1').hide();
			$('.content').removeClass('s4');
			$('.content').addClass('s8');
			// $('.searchBoxResult').hide();
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
			if (searchKey !== '') {
				$.ajax({
					method: 'post',
					url: window.location.origin + '/work/profile/QueryResult',
					data: {searchKey: searchKey},
					success: function (values) {
						if (values !== '') {
							$('.searchBoxResult').html(values);
							$('.searchBoxResult').removeClass('d-none');
							let src_str = $(".content").html();
							searchKey = searchKey.replace(/(\s+)/, "(<[^>]+>)*$1(<[^>]+>)*");
							let pattern = new RegExp("(" + searchKey + ")", "gi");
							src_str = src_str.replace(pattern, "<span style='color: red'>$1</span>");
							$(".content").html(src_str);
						}
					}
				})
			} else {
				$('.searchBoxResult').addClass('d-none');
			}
		})
	})
</script>
