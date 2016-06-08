<div v-if="flashMessage" class="alert alert-@{{ flashType }}">
	<b>@{{ flashMessage }}</b>
	<hr v-if="$validation.errors">
	<validator-errors :component="'custom-error'" :validation="$validation"></validator-errors>
</div>
