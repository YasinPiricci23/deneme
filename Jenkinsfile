node {
  stage('git') {
    git 'https://github.com/YasinPiricci23/deneme.git'
  }
  stage('SonarQube analysis') {
    def scannerHome = tool 'sonar';
    withSonarQubeEnv() { // If you have configured more than one global server connection, you can specify its name
      sh "${scannerHome}/bin/sonar-scanner -X -Dsonar.projectKey=argo-wf -Dsonar.sources=. -Dsonar.host.url=http://host.docker.internal:9000  -Dsonar.token=sqp_e43b5aafa498c3ec6d0e5105f35659147b61b0f3 -Dsonar.sourceEncoding=UTF-8"
    }
  }
  stage("Quality gate") {
    steps {
      waitForQualityGate abortPipeline: true
    }
  }
}
