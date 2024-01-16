<template>
  <v-container>
    <v-card class="w-50" elevation="4">
      <v-card-title>平家物語</v-card-title>
      <v-card-subtitle>作者不詳</v-card-subtitle>
      <v-card-text>
        祇園精舎の鐘の声、諸行無常の響きあり。
        娑羅双樹の花の色、盛者必衰の理をあらわす。
        おごれる人も久しからず、唯、春の夜の夢のごとし。
        猛きものもついにはほろびぬ、
        偏に風の前の塵に同じ。
      </v-card-text>
      <v-card-actions>
        <v-btn>源氏を選択</v-btn>
        <v-btn>平家を選択</v-btn>
      </v-card-actions>
    </v-card>
  </v-container>
</template>
<script>
export default {
  data() {
    return {
      variants: ['elevated','flat','tonal','outlined','text','plain']
    }
  }
}
</script>