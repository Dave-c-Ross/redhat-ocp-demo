# redhat-ocp-demo
Repository to host different application source or manifest to perform Red Hat Openshift Container Platform demos


Pipelines will need 2 additional task to run:
```
oc create -f https://raw.githubusercontent.com/openshift/pipelines-tutorial/pipelines-1.8/01_pipeline/01_apply_manifest_task.yaml
oc create -f https://raw.githubusercontent.com/openshift/pipelines-tutorial/pipelines-1.8/01_pipeline/02_update_deployment_task.yaml
```

---