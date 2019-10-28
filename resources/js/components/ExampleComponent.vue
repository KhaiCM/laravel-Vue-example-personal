<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Export table imports to csv file</div>
                    <div>
                        <div class="col-sm">
                            <label>abv</label>
                        </div>
                        <select v-model="selectedType" class="browser-default custom-select">
                            <option v-for="fileType in fileTypes">{{ fileType }}</option>
                        </select>
                        <template v-if="selectedType == 'xlsx'">
                            <div class="col-sm">
                                <label>abv</label>
                            </div>
                            <select v-model="selectedChar" class="browser-default custom-select">
                                <option v-for="sperateChar in sperateChars">{{ sperateChar }}</option>
                            </select>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                fileTypes: ['xlsx', 'csv'],
                sperateChars: [],
                selectedType: 'xlsx',
                selectedChar: ['\\t', ';', ',']
            }
        },
        mounted() {
            // TODO: call api
        }
    }
</script>
