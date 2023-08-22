<div class="wrapper">

	<h2><strong>All Games<span>( 4 )</span></strong></h2>

	<div class="cards">

		<figure class="card">

			<img src="https://www.linkpicture.com/q/1_1484.jpg" />

			<figcaption>Dota 2</figcaption>

		</figure>

		<figure class="card">

			<img src="https://www.linkpicture.com/q/2_965.jpg" />

			<figcaption>Stick Fight</figcaption>

		</figure>

		<figure class="card">

			<img src="https://www.linkpicture.com/q/3_695.jpg" />

			<figcaption>Minion Masters</figcaption>

		</figure>

		<figure class="card">

			<img src="https://www.linkpicture.com/q/4_543.jpg" />

			<figcaption>KoseBoz!</figcaption>

		</figure>

	</div>

	<h2><strong>What's new?</strong></h2>

	<div class="news">

		<figure class="article">

			<img src="https://www.linkpicture.com/q/news1_1.jpg" />

			<figcaption>

				<h3>New Item</h3>

				<p>

					In today’s update, two heads are better than one, and three heads are better than that, as the all-new Flockheart’s Gamble Arcana item for Ogre Magi makes its grand debut.

				</p>

			</figcaption>

		</figure>

		<figure class="article">

			<img src="https://www.linkpicture.com/q/news2.png" />

			<figcaption>

				<h3>Update</h3>

				<p>

					Just in time for Lunar New Year and the Rat’s time in the cyclical place of honor, the Treasure of Unbound Majesty is now available.

				</p>

			</figcaption>

		</figure>

	</div>

</div>



<style>

for i in ( abs absolute ) ( rel relative ) ( fix fixed )
    .{ i[ 0 ] }
        position i[ 1 ]

for j in ( i inline ) ( ib inline-block ) ( b block ) ( n none ) ( f flex ) ( 'if' inline-flex ) ( g grid ) ( ig inline-grid )
    .d{ j[ 0 ] }
        display j[ 1 ]

.vm
    vertical-align middle

// ====================================

$body-bg = #24282f

// ====================================

body
    background $body-bg
    font-family 'Alegreya Sans'

.wrapper
    padding 15px

h2
    @extends .rel, .vm
    padding 10px
    padding-left 25px
    color #ccc
    margin 0

    strong
        @extends .vm, .rel
        z-index 2
        background $body-bg
        padding 4px 8px

    span
        @extends .vm
        font-size .7em
        color #aaa
        margin-left 10px

    &:after
        @extends .abs
        content ''
        z-index 1
        bottom 50%
        margin-bottom -2px
        height 2px
        left 0
        right 0
        background lighten( $body-bg, 10% )


.cards
    @extends .df
    flex-flow row wrap

    .card
        @extends .rel
        margin 20px
        width 180px
        height 270px
        overflow hidden
        box-shadow 0 5px 10px rgba( #000, .8 )
        transform-origin center top
        transform-style preserve-3d
        transform translateZ( 0 )
        transition .3s

        img
            width 100%
            min-height 100%

        figcaption
            @extends .abs
            bottom 0
            left 0
            right 0
            padding 20px
            padding-bottom 10px
            font-size 20px
            background none
            color #fff
            // text-shadow 0 1px 0 rgba( #000, .3 )
            // background linear-gradient( to top, rgba( #000, .3 ), transparent )
            transform translateY( 100% )
            transition .3s

        &:after
            @extends .abs
            content ''
            z-index 10
            width 200%
            height 100%
            top -90%
            left -20px
            opacity .1
            transform rotate( 45deg )
            background linear-gradient( to top, transparent, #fff 15%, rgba( #fff, .5 ) )
            transition .3s

        // :focus and :active just added for a some android versions to simulate hover effect
        &:hover, &:focus, &:active
            box-shadow 0 8px 16px 3px rgba( #000, .6 )
            transform translateY( -3px ) scale( 1.05 ) rotateX( 15deg )

            figcaption
                transform none

            &:after
                transform rotate( 25deg )
                top -40%
                opacity .15


.news
    @extends .cards

    .article
        @extends .rel
        overflow hidden
        width 350px
        height 235px
        margin 20px

        img
            width 100%
            min-height 100%
            transition .2s

        figcaption
            @extends .abs
            font-size 14px
            text-shadow 0 1px 0 rgba( #333, .3 )
            color #fff
            left 0
            right 0
            top 0
            bottom 0
            padding 40px
            box-shadow 0 0 2px rgba( #000, .2 )
            background rgba( #061235, .6 )
            opacity 0
            transform scale( 1.15 )
            transition .2s

            h3
                color #3792e3
                font-size 16px
                margin-bottom 0
                font-weight bold

        // :focus and :active just added for a some android versions to simulate hover effect
        &:hover, &:focus, &:active

            img
                filter blur( 3px )
                transform scale( .97 )

            figcaption
                opacity 1
                transform none


</style>