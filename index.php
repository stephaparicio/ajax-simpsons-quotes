<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<title>Ajax quest challenge</title>
		<link rel="icon" type="image/png" href="favicon.png" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://unpkg.com/bulma@0.7.5/css/bulma.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
			integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
			crossorigin="anonymous"
		/>
		<style></style>
	</head>

	<body>
		<section class="section">
			<div class="container">
				<h1 class="title">Simpson API</h1>

				<div class="content" id="chuck-norris"></div>
			</div>
		</section>

		<!-- We need to load axios first! -->
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"
			integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs="
			crossorigin="anonymous"
		>
</script>
		<script>// This function loads pokemon data from the Pokemon API
function fetchPokemonJSON() {
  // Feel free to download this HTML and edit it, to use another Pokemon ID
  const url = `https://simpsons-quotes-api.herokuapp.com/quotes`;
  axios.get(url)
    .then(function(response) {
      return response.data; // response.data instead of response.json() with fetch
    })
    .then(function(toto) {
      console.log('data decoded from JSON:', toto[0]);

      // Build a block of HTML
      const pokemonHtml = `
        <p><strong>${toto[0].quote}</strong></p>
        <img src="${toto[0].image}" />
        <p>${toto[0].character}</p>
      `;
      document.querySelector('#chuck-norris').innerHTML = pokemonHtml;
    });
}

fetchPokemonJSON();</script>
	</body>
</html>
