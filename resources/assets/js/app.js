require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
	data () {
		return {
			nav: {
				open: false,
				active: 'products',
				links: {
					products: {
						left: 0,
						width: 368
					},
					developers: {
						left: 0,
						width: 422
					}
				}
			}
		}
	},
	computed: {
		positionTransform () {
			let left = this.nav.links[this.nav.active].left - (this.nav.links[this.nav.active].width / 2)
			return `translateX(${left}px)`
		},
		arrowTransform () {
			let left = this.nav.links[this.nav.active].left - 6
			return `translateX(${left}px) rotate(45deg)`
		}
	},
	mounted () {
		this.nav.links.products.left = this.$refs.productsLink.getBoundingClientRect().left
			+ (this.$refs.productsLink.offsetWidth / 2)
		this.nav.links.developers.left = this.$refs.developersLink.getBoundingClientRect().left
			+ (this.$refs.developersLink.offsetWidth / 2)
	},
	methods: {
		openDropdown (navitem) {
			this.nav.open = true
			this.nav.active = navitem
		},
		closeDropdown () {
			this.nav.open = false
		},
		keepDropdownOpen () {
			let opacity = getComputedStyle(this.$refs.dropdown).getPropertyValue('opacity')
			if (opacity > 0) this.nav.open = true
		}
	}
});
