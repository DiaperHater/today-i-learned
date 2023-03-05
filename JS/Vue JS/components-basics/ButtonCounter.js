export default {
	data() {
		return {
			count: 0
		}
	},
	template: /* html */`
		<button @click="count++">
			You clicked me {{ count }} times.
		</button>
	`
}