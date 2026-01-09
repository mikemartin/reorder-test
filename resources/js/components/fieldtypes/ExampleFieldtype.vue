<template>
    <div class="example-fieldtype-container">
        <Input v-model="value" />
    </div>
</template>

<script>
// Learn more at https://statamic.dev/extending/fieldtypes/
import { Input } from '@statamic/cms/ui';

export default {
    mixins: [Fieldtype],
    components: { Input },
};
</script>
